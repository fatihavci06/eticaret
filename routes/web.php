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
Route::get('/','App\Http\Controllers\indexController@index')->name('home');

Route::get('aboutus','App\Http\Controllers\indexController@aboutus')->name('aboutus');
Route::post('contactus','App\Http\Controllers\indexController@contactus')->name('contactus');
Route::get('references','App\Http\Controllers\indexController@references')->name('references');
Route::get('contact','App\Http\Controllers\indexController@contact')->name('contact');
Route::get('faq','App\Http\Controllers\indexController@faq')->name('faq');
Route::get('/categoryList','App\Http\Controllers\Admin\HomeController@categoryList');
Route::get('admin/anasayfa','App\Http\Controllers\Admin\HomeController@index')->name('admin.anasayfa')->middleware('auth');
Route::get('admin/login','App\Http\Controllers\Admin\LoginController@index')->name('admin.login');
Route::get('admin/logout','App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');
Route::post('admin/loginpost','App\Http\Controllers\Admin\LoginController@logincheck')->name('login_check');
Route::get('addtocart/{id}','App\Http\Controllers\indexController@addtocart')->whereNumber('id')->name('addtocart');
Route::post('getproduct','App\Http\Controllers\indexController@getproduct')->name('getproduct');
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

   Route::prefix('messages')->group(function () {
   Route::get('/','App\Http\Controllers\Admin\MessageController@index')->name('admin_message');
   Route::get('edit/{id}','App\Http\Controllers\Admin\MessageController@edit')->name('admin_message_edit');
   Route::post('update/{id}','App\Http\Controllers\Admin\MessageController@update')->name('admin_message_update');
   Route::get('show/{id}','App\Http\Controllers\Admin\MessageController@show')->name('admin_message_show');
   Route::get('delete/{id}','App\Http\Controllers\Admin\MessageController@destroy')->name('admin_message_delete');
   
});

   Route::prefix('image')->group(function () {
   Route::get('create/{product_id}','App\Http\Controllers\Admin\ImageController@create')->name('admin_image_create');
   Route::post('store/{product_id}','App\Http\Controllers\Admin\ImageController@store')->name('admin_image_store');
   Route::get('delete/{id}/{product_id}','App\Http\Controllers\Admin\ImageController@destroy')->name('admin_image_delete');
   Route::get('show/{id}','App\Http\Controllers\Admin\ImageController@show')->name('admin_image_show');
   
   

   
});
   Route::prefix('faq')->group(function () {
   Route::get('/','App\Http\Controllers\Admin\FaqController@index')->name('admin_faq');
   Route::get('add','App\Http\Controllers\Admin\FaqController@add')->name('admin_faq_add');
   Route::post('update/{id}','App\Http\Controllers\Admin\FaqController@update')->name('admin_faq_update');
   Route::get('show/{id}','App\Http\Controllers\Admin\FaqController@show')->name('admin_faq_show');
   Route::get('delete/{id}','App\Http\Controllers\Admin\FaqController@destroy')->name('admin_faq_delete');
   Route::post('create','App\Http\Controllers\Admin\FaqController@store')->name('admin_faq_create');
});
   #Setting
   Route::get('settings/edit','App\Http\Controllers\Admin\SettingController@edit')->name('admin_settings_edit');
   Route::get('testsetting','App\Http\Controllers\indexController@getSetting');
   Route::post('settings/update','App\Http\Controllers\Admin\SettingController@update')->name('admin_settings_update');
});
Route::middleware('auth')->prefix('myaccount')->group(function () {
   Route::get('/','App\Http\Controllers\indexController@myuser')->name('myuser');
      Route::prefix('shopcart')->group(function () {
      Route::get('/','App\Http\Controllers\ShopcartController@index')->name('user_shopcart');
     
      Route::post('update/{id}','App\Http\Controllers\ShopcartController@update')->name('user_shopcart_update');
      
      Route::get('delete/{id}','App\Http\Controllers\ShopcartController@destroy')->name('user_shopcart_delete');
      Route::post('store/{id}','App\Http\Controllers\ShopcartController@store')->name('user_shopcart_store');
});

   });
Route::get('category/product_list/{sl}/{slug?}','App\Http\Controllers\indexController@product_list')->name('product_list');