<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;

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


	Route::get('load_category',[CategoryController::class,'datatable'])->name('admin.load_category');
	Route::get('category_list',[CategoryController::class,'index'])->name('admin.category_list');
	Route::get('category_create',[CategoryController::class,'create'])->name('admin.category_create');
	Route::post('category_store',[CategoryController::class,'store'])->name('admin.category_store');
	Route::get('category_edit',[CategoryController::class,'edit'])->name('admin.category_edit');
	Route::post('category_update',[CategoryController::class,'update'])->name('admin.category_update');
	Route::post('category_delete',[CategoryController::class,'delete'])->name('admin.category_delete');


	// Authenticate Routes
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
