<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddcartController;
use App\Http\Controllers\AdminlistController;
use App\Http\Controllers\CartController;
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

Route::get('/', function () 
{
    return view('Frontview.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/add', [CartController::class,'add'])->name('cart.store');
Route::post('/update',[CartController::class,'update'])->name('cart.update');
Route::post('/remove',[CartController::class,'remove'])->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

Route::get('cart',function()
{
    $cartCollection = \Cart::getContent();
    // dd($cartCollection);
    return view('cart', compact('cartCollection'));
});



Route::prefix('admin')->name('admin.')->group(function() 
{
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::view('addProduct','admin.addproduct');
    // Route::view('addproduct65','admin.addproduct45');
    Route::get('addproduct654',[ProductController::class,'adddata'])->name('addproduct654');
    Route::post('addproduct',[ProductController::class,'insert'])->name('addproduct');

    Route::get('editProduct/{id}',[ProductController::class,'editProduct'])->name('editProduct');
    Route::put('UpdateProduct/{id}',[ProductController::class,'UpdateProduct'])->name('UpdateProduct');
    Route::get('deleteProduct/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');

    Route::post('addcart',[AddcartController::class,'addcart'])->name('addcart');
    Route::get('addcartlist',[AddcartController::class,'addcartlist'])->name('addcartlist');

    Route::get('adminlist',[AdminlistController::class,'adminlist'])->name('adminlist');

    Route::post('adminRegistration',[AdminlistController::class,'adminRegistration'])->name('adminRegistration');

});