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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('anasayfa','App\Http\Controllers\indexController@index');
Route::get('admin/anasayfa','App\Http\Controllers\Admin\HomeController@index')->name('admin.anasayfa')->middleware('auth');
Route::get('admin/login','App\Http\Controllers\Admin\LoginController@index')->name('admin.login');
Route::get('admin/logout','App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');
Route::post('admin/loginpost','App\Http\Controllers\Admin\LoginController@logincheck')->name('login_check');

Route::middleware('auth')->prefix('admin')->group(function () {
   Route::get('anasayfa','App\Http\Controllers\Admin\HomeController@index')->name('admin.anasayfa');
   Route::get('category','App\Http\Controllers\Admin\CategoryController@index')->name('admin_category');
   Route::get('category/add','App\Http\Controllers\Admin\CategoryController@add')->name('admin_category_add');
   Route::post('category/update/{id}','App\Http\Controllers\Admin\CategoryController@update')->name('admin_category_update');
   Route::get('category/show/{id}','App\Http\Controllers\Admin\CategoryController@show')->name('admin_category_show');
   Route::get('category/delete/{id}','App\Http\Controllers\Admin\CategoryController@destroy')->name('admin_category_delete');
   Route::post('category/create','App\Http\Controllers\Admin\CategoryController@store')->name('admin_category_create');

   Route::prefix('product')->group(function () {
   Route::get('/','App\Http\Controllers\Admin\ProductController@index')->name('admin_products');
   Route::get('add','App\Http\Controllers\Admin\ProductController@add')->name('admin_product_add');
   Route::post('update/{id}','App\Http\Controllers\Admin\ProductController@update')->name('admin_product_update');
   Route::get('show/{id}','App\Http\Controllers\Admin\ProductController@show')->name('admin_product_show');
   Route::get('delete/{id}','App\Http\Controllers\Admin\ProductController@destroy')->name('admin_product_delete');
   Route::post('create','App\Http\Controllers\Admin\ProductController@store')->name('admin_product_create');
});
});
