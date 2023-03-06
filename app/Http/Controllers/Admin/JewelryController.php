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
        $gem_name = $request->gem_name;
        
        if ($gem_name != '') {
            $posts = Gem::where('title', $gem_name)->get();
        } else {
            $posts = Gem::all();
        }
        
        return view('admin.jewelry.index', ['posts' => $posts, 'gem_name' => $gem_name]);
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
        $posts = Gem::all();
        return view('admin.jewelry.birth',['posts' => $posts]);
    
    }
    public function search(Request $request)
    {
        $katakana=array(
        	array('ア','アイウエオ'),
        	array('カ','カキクケコガギグゲゴ'),
        	array('サ','サシスセソザジズゼゾ'),
        	array('タ','タチツテトダヂヅデド'),
        	array('ナ','ナニヌネノ'),
        	array('ハ','ハヒフヘホバビブベボパピプペポ'),
        	array('マ','マミムメモ'),
        	array('ヤ','ヤユヨ'),
        	array('ラ','ラリルレロ'),
        	array('ワ','ワヲン')
	    );
       
        $posts = Gem::all();
        
        return  view('admin.jewelry.search', ['posts' => $posts, 'katakana' => $katakana]);
    }
}
