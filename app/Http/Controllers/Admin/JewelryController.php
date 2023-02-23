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
        
        $gem->fill($form)->save();
        
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
    
    public function edit(Request $request)
    {
        $gem = Gem::find($request->id);
        
        if (empty($gem)) {
            abort(404);
            
        }
        return view('admin.jewelry.edit', ['gem_form' => $gem]);
    }
    
    public function update(Request $request)
    {
        $this -> validate($request, Gem::$rules);
        
        $gem = Gem::find($request->id);
        $gem_form = $request->all();
        
        if ($request->remove == 'true') {
            $gem_form['image_path'] = null;
        } elseif ($reqest->file('image')) {
            $path = $reqest->fiie('image')->store('public/image');
            $gem_form ['image_path'] = basename ($path);
        } else {
            $gem_form ['image_path'] = $gem->image_path;
        }
        
        unset($gem_form['image']);
        unset($gem_form['remove']);
        unset($gem_form['_token']);
        
        $gem->fill($gem_form)->save;
        
        return redirect('admin/jewelry/edit?id=' . $gem->id);
    }
    
     public function delete(Request $request)
    {
        $gem = Gem::find($request->id);
        
        $gem->delete();
        
        return redirect('admin/jewelry/');
    }
    
    public function show(Request $reqest)
    {
        //dd($reqest);
        $id=$reqest->id;
        //dd($id);
        $gem=Gem::find($id);
        //dd($jewelry);
        return view('admin.jewelry.show', ['gem' => $gem]);
    }
    
    public function birth(Request $reqest)
    {
        return view('admin.jewelry.birth');
    }
    
    public function search(Request $reqest)
    {
        $id=$reqest->id;
        
        $gem=Gem::find($id);
        
        return  view('admin.jewelry.search');
    }
}
