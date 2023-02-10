<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gem;

class JewelryController extends Controller
{
    public function add()
    {
        return view('admin.jewelry.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request,Gem::$rules);
        
        $gem = new Gem;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $gem->image_path = basename($path);
        } else {
            $gem->image_path = null;
        }
        unset($form['_token']);
        unset($form['image_path']);
        
        $gem->fill($form);
        $gem->save();
        
        return redirect('admin/jewelry/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        
        if ($cond_title != '') {
            $posts = Gem::where('title', $cond_title)->get();
        } else {
            $posts = Gem::all();
        }
        
        return view('admin.jewelry.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function edit()
    {
        return view('admin.jewery.edit');
    }
    
    public function update()
    {
        return redirect('admin/jewelry/edit');
    }
    public function delete()
    {
        return redirect('admin/jewelry/');
    }
}
