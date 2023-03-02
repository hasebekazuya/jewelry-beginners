<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function add()
    {
        return view('admin.favorite.create');
    }
    
    public function create(Request $request)
    {
        //dd('クリエイト呼ばれた');
        //dd($request->gem_id);
        $user_id=\Auth::id();
        //dd($user_id);
        $gem_id=$request->id;
        $favorite=new Favorite;
        $favorite->user_id=$user_id;
        $favorite->gem_id=$gem_id;
        $favorite->save();
        return redirect('admin/favorite/create');
    }
    
    public function index(Request $request)
    {
        
        return view('admin/favorite/index');
    }
    
    public function edit()
    {
        
        return view();
    }
    
    public function update()
    {
        
        return redirect();
    }
    
     public function delete()
    {
        
        return redirect();
    }
}
