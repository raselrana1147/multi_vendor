<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;


use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\Auth\SellerLoginController;

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


Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');



	Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');
	Route::post('login',[LoginController::class,'login'])->name('admin.login');
	Route::post("admin_logout",[LoginController::class,'logout'])->name('admin.logout');
});

Route::group(['prefix'=>'seller'],function(){
	Route::get('dashboard',[SellerController::class,'index'])->name('seller.dashboard');


	Route::get('login',[SellerLoginController::class,'showLoginForm'])->name('seller.login');
	Route::post('login',[SellerLoginController::class,'login'])->name('seller.login');
	Route::post("seller_logout",[SellerLoginController::class,'logout'])->name('seller.logout');
});








Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
