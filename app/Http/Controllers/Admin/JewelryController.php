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
        $posts =  Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'ア%')
              ->orWhere('gem_name', 'like', 'イ%')
              ->orWhere('gem_name', 'like', 'ウ%')
              ->orWhere('gem_name', 'like', 'エ%')
              ->orWhere('gem_name', 'like', 'オ%');
              })->get();
        $posts2 =  Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'カ%')
              ->orWhere('gem_name', 'like', 'キ%')
              ->orWhere('gem_name', 'like', 'ク%')
              ->orWhere('gem_name', 'like', 'ケ%')
              ->orWhere('gem_name', 'like', 'コ%');
              })->get();      
        return view('admin.jewelry.birth',['posts' => $posts, 'posts2' => $posts2]);
    }
    
    public function search(Request $request)
    {
    
        // $gem_name= $request->gem_name;
        
        // if ($gem_name != '') {
        //     $posts = Gem::where('title', $gem_name)->get();
        // } else {
            // $posts = Gem::all();
        // }
        
        //$posts = Gem::where('gem_name','like', 'ア%')->where('gem_name','like', 'イ%')->orWhere('gem_name','like', 'ウ%')->orWhere('gem_name','like', 'エ%')->orWhere('gem_name','like', 'オ%')->get();
        $posts =  Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'ア%')
              ->orWhere('gem_name', 'like', 'イ%')
              ->orWhere('gem_name', 'like', 'ウ%')
              ->orWhere('gem_name', 'like', 'エ%')
              ->orWhere('gem_name', 'like', 'オ%');
              })->get();
        $posts2 = Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'カ%')
              ->orWhere('gem_name', 'like', 'キ%')
              ->orWhere('gem_name', 'like', 'ク%')
              ->orWhere('gem_name', 'like', 'ケ%')
              ->orWhere('gem_name', 'like', 'コ%');
            })->get();
        $posts3 = Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'サ%')
              ->orWhere('gem_name', 'like', 'シ%')
              ->orWhere('gem_name', 'like', 'ス%')
              ->orWhere('gem_name', 'like', 'セ%')
              ->orWhere('gem_name', 'like', 'ソ%');
            })->get(); 
        $posts4 = Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'タ%')
              ->orWhere('gem_name', 'like', 'チ%')
              ->orWhere('gem_name', 'like', 'ツ%')
              ->orWhere('gem_name', 'like', 'テ%')
              ->orWhere('gem_name', 'like', 'ト%');
            })->get();
        $posts5 = Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'ナ%')
              ->orWhere('gem_name', 'like', 'ニ%')
              ->orWhere('gem_name', 'like', 'ヌ%')
              ->orWhere('gem_name', 'like', 'ネ%')
              ->orWhere('gem_name', 'like', 'ノ%')
              ->orWhere('gem_name', 'like', 'ハ%')
              ->orWhere('gem_name', 'like', 'マ%')
              ->orWhere('gem_name', 'like', 'ヤ%')
              ->orWhere('gem_name', 'like', 'ラ%')
              ->orWhere('gem_name', 'like', 'ワ%');
            })->get();
        $posts6 = Gem::where(function($query){
        $query->orWhere('gem_name', 'like', 'ラ%')
              ->orWhere('gem_name', 'like', 'リ%')
              ->orWhere('gem_name', 'like', 'ル%')
              ->orWhere('gem_name', 'like', 'レ%')
              ->orWhere('gem_name', 'like', 'ロ%');
            })->get();    
        //$posts = Gem::whereIn('gem_name', 'like', ['ア%','イ%','ウ%', 'エ%', 'オ%'])->get();
        
        return  view('admin.jewelry.search', ['posts' => $posts, 'posts2'=> $posts2,'posts3' => $posts3, 'posts4'=> $posts4, 'posts5' => $posts5, 'posts6'=> $posts6]);
    }
}
