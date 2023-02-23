<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function add()
    {
        return view('admin.favorite.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/favorite/create');
    }
    
    public function index()
    {
        
        return view();
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
