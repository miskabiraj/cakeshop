<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'CakeFrontEndController@home')->name('home');
Route::get('/shop', 'CakeFrontEndController@shop')->name('shop');
Route::get('/cart', 'CakeFrontEndController@cart')->name('cart');
Route::get('/single-product', 'CakeFrontEndController@product')->name('product');





Route::get('/package/{catagory}', 'CakeFrontEndController@PackageCatagoryList');





Route::get('/home','CakeController@category')->name('home');

Route::get('/itinerary','CakeController@itinerary')->name('itinerary');
Route::post('/store', 'CakeController@additinerary')->name('itinerary_insert');
Route::get('/viewitinerary/{id}', 'CakeController@viewitinerary');
Route::post('/itineraryupdate/{id}','CakeController@itineraryupdate');
Route::get('/itineraryedit/{id}', 'CakeController@itineraryedit');
Route::get('/itinerarydelete/{id}', 'CakeController@itinerarydelete');
Route::get('/report', 'CakeController@report')->name('report');
Route::delete('/imagedelete/{id}', 'CakeController@imagedelete');



Route::get('/category','CakeController@category')->name('category');
Route::post('/insert','CakeController@addcategory')->name('insert');
Route::get('/viewcategory','CakeController@viewcategory');



Route::get('/complementary','CakeController@complementary');
Route::post('/addcomplementary','CakeController@addcomplementary')->name('addcomplementary');
Route::get('/viewcomplementary','CakeController@viewcomplementary');


Route::get('/resetPassword','CakeController@resetPassword');
Route::post('/resetPassword','CakeController@PasswordUpdate');


