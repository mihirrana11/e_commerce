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

// Route::get('/', function () {
//     return view('welcome');
// });


//adminsite route
Route::get('/product', function () {
    return view('product');
});

Route::get('product','App\Http\Controllers\ProductController@show');
Route::post('submitproduct','App\Http\Controllers\ProductController@store');
Route::get('product/{id}','App\Http\Controllers\ProductController@edit');
Route::post('updateproduct/{id}','App\Http\Controllers\ProductController@update');
Route::get('product_delete/{id}','App\Http\Controllers\ProductController@destroy');



// Category
Route::get('','App\Http\Controllers\EComController@show');
Route::get('welcome','App\Http\Controllers\EComController@create');
Route::post('submit','App\Http\Controllers\EComController@store');
Route::get('welcome/{id}','App\Http\Controllers\EComController@edit');
Route::post('update/{id}','App\Http\Controllers\EComController@update');
Route::get('ecom_delete/{id}','App\Http\Controllers\EComController@destroy');



// usersite route

// Route::get('/index', function () {
//     return view('user/index');
// });
// Route::get('/cart', function () {
//     return view('user/cart');
// });

// Route::get('/chekout', function () {
//     return view('user/chekout');
// });
// Route::get('/shop', function () {
//     return view('user/shop');
// });

// Route::get('/contact', function () {
//     return view('user/contact');
// });

// Route::get('/shopdetails', function () {
//     return view('user/shopdetails');
// });

Route::get('/shopshow', function () {
    return view('user/shopshow');
});

Route::get('/index','App\Http\Controllers\EComController@categoryshow');
Route::get('/index','App\Http\Controllers\ProductController@productsshow');

Route::get('/cart','App\Http\Controllers\EComController@navcartshow');
Route::get('/chekout','App\Http\Controllers\EComController@navchekoutshow');
Route::get('/shop','App\Http\Controllers\EComController@navshow');
Route::get('/shopdetails','App\Http\Controllers\EComController@navshopshow');
Route::get('/contact','App\Http\Controllers\EComController@navcontactshow');
// Route::get('/shopshow','App\Http\Controllers\EComController@categoryproducts');

Route::get('/shop','App\Http\Controllers\ProductController@productshow');
Route::get('/shopshow/{id}','App\Http\Controllers\ProductController@categoryproduct');




Route::get('/signup', function () {   
    return view('user/signup');       //user    
});

Route::get('/login', function () {
    return view('user/login');      //user
});

Route::post('/signup',[App\Http\Controllers\AuthController::class,'signup']);//user
Route::post('/login',[App\Http\Controllers\AuthController::class,'authenticate']);//user
Route::get("/logout",[App\Http\Controllers\AuthController::class,'logout']);//user