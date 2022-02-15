<?php

use App\Models\EBook;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EBookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OrderCartController;

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

// Untuk Index
Route::get('/', function(){
    return view('content.index',[
        'title' => 'Index'
    ]);
});

// Untuk Login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);

// Untuk Register
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

// Untuk Log Out
Route::post('/logout',[LoginController::class,'logout']);

// Untuk Home
Route::get('/home', function(){
    return view('content.home',[
        'title' => 'Home',
        'ebooks' => EBook::all()
    ]);
})->middleware('auth');

// Untuk Detail Buku
Route::get('/e_book/{ebook:id}',[EBookController::class,'show'])->middleware('auth');

//Untuk Profile
Route::resource('/profile',ProfileController::class)->middleware('auth')->except(['destroy','create','show','store']);
Route::get('/profile/success',function(){
    return view('content.profile.success',[
        'title' => 'Success Saved'
    ]);
})->middleware('auth');


// Untuk menambah Cart
Route::get('/addCart/{ebook:id}',[OrderCartController::class,'addToCart'])->middleware('auth');

// Untuk Masuk ke Cart
Route::resource('/order', OrderController::class)->middleware('auth');
Route::get('/cart/success',function(){
    return view('content.cart.success',[
        'title' => 'Success Cart'
    ]);
})->middleware('auth');

// Untuk admin
Route::resource('/admin/maintenance', AdminController::class)->middleware('admin');

// Untuk Logout
Route::get('/logout',function(){
    return view('content.logout',[
        'title' => 'Success Logout'
    ]);
})->middleware('guest');
