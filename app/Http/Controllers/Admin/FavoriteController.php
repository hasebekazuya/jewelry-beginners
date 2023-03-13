<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function add()
    {
        //dd('アドが呼ばれた');
        $user=\Auth::user();
        //dd($user);
        $gems=$user->gems()->get();
        //dd($gems);  
        
        return view('admin.favorite.create', ['gems'=>$gems]);
    }
    
    public function create(Request $request)
    {
        //dd($request->gem_id);
        $user_id=\Auth::id();
        //dd($user_id);
        $gem_id=$request->gem_id;
        
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
    
     public function delete()
    {
        
        return redirect();
    }
}
