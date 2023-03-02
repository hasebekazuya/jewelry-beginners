<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\JewelryController;

Route::controller(JewelryController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('jewelry/create', 'add')->name('jewelry.add');
    Route::post('jewelry/create', 'create')->name('jewelry.create');
    Route::get('jewelry','index')->name('jewelry.index');
    Route::get('jewelry/show','show')->name('jewelry.show');
    Route::get('jewelry/search','search')->name('jewelry.search');
    Route::get('jewelry/birth','birth')->name('jewelry.birth');  
    Route::get('jewelry/edit','edit')->name('jewelry.edit');
    Route::post('jewelry/edit','update')->name('jewelry.update');
    Route::get('jewelry/delete','delete')->name('jewelry.delete');
    
    Route::get('jewelry/detail', function () {
        return view('admin.jewelry.detail');
    })->name('jewelry.detail');
    
     Route::get('jewelry/trivia', function () {
        return view('admin.jewelry.trivia');
    })->name('jewelry.trivia');
    
     Route::get('jewelry/top', function () {
        return view('admin.jewelry.top');
    })->name('jewelry.top');
    
});

use App\Http\Controllers\Admin\FavoriteController;

Route::controller(FavoriteController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('favorite/create', 'add')->name('jewelry.add');
    Route::post('favorite/create', 'create')->name('favorite.create');
    Route::get('favorite/index','index')->name('favorite.index');
    Route::get('favorite/delete','delete')->name('favorite.delete');
}); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
