<?php

use Illuminate\Support\Facades\Route;
//==================Admin=============
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;


//=========seller===============
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\Auth\SellerLoginController;



// Admin routes
Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

	// Category Routes
	Route::get('load_category',[CategoryController::class,'datatable'])->name('admin.load_category');
	Route::get('category_list',[CategoryController::class,'index'])->name('admin.category_list');
	Route::get('category_create',[CategoryController::class,'create'])->name('admin.category_create');
	Route::post('category_store',[CategoryController::class,'store'])->name('admin.category_store');
	Route::get('category_edit/{id}',[CategoryController::class,'edit'])->name('admin.category_edit');
	Route::post('category_update',[CategoryController::class,'update'])->name('admin.category_update');
	Route::post('category_delete',[CategoryController::class,'delete'])->name('admin.category_delete');


	// Sub Category Routes
	Route::get('load_subcategory',[SubCategoryController::class,'datatable'])->name('admin.load_subcategory');
	Route::get('subcategory_list',[SubCategoryController::class,'index'])->name('admin.subcategory_list');
	Route::get('subcategory_create',[SubCategoryController::class,'create'])->name('admin.subcategory_create');
	Route::post('subcategory_store',[SubCategoryController::class,'store'])->name('admin.subcategory_store');
	Route::get('subcategory_edit/{id}',[SubCategoryController::class,'edit'])->name('admin.subcategory_edit');
	Route::post('subcategory_update',[SubCategoryController::class,'update'])->name('admin.subcategory_update');
	Route::post('subcategory_delete',[SubCategoryController::class,'delete'])->name('admin.subcategory_delete');


	// Authenticate Routes
	Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.login');
	Route::post('login',[LoginController::class,'login'])->name('admin.login');
	Route::post("admin_logout",[LoginController::class,'logout'])->name('admin.logout');
});


// Seller Routes
Route::group(['prefix'=>'seller'],function(){
	Route::get('dashboard',[SellerController::class,'index'])->name('seller.dashboard');


	Route::get('login',[SellerLoginController::class,'showLoginForm'])->name('seller.login');
	Route::post('login',[SellerLoginController::class,'login'])->name('seller.login');
	Route::post("seller_logout",[SellerLoginController::class,'logout'])->name('seller.logout');
});





/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
