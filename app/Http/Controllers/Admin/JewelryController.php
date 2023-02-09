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
        $this->validate($request,Jewelry::$rules);
        
        $jewelry = new jewelry;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $jewelry->image_path = basename($path);
        } else {
            $jewelry->image_path = null;
        }
        unset($form['_token']);
        unset($form['image_path']);
        
        $jewelry->fill($form);
        $jewelry->save();
        
        return redirect('admin/jewelry/create');
    }
    
    public function index()
    {
        return view('admin.jewelry.index');
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
