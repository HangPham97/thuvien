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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/',['as'=>'index','uses'=>'PageController@getIndex']);
Route::get('home',['as'=>'index','uses'=>'PageController@getIndex']);
Route::get('category/{type}',['as'=>'category','uses'=>'PageController@getCategory']);
Route::get('detail/{id}',['as'=>'detail','uses'=>'PageController@getDetail']);
Route::get('about',['as'=>'about', 'uses'=>'PageController@getAbout']);
Route::get('borrow/{id}',['as'=>'borrow','uses'=>'PageController@getAdd']);
Route::get('delete/{id}',['as'=>'delete','uses'=>'PageController@getDel']);
Route::get('get_book',[
    'as'=>'dathang',
    'uses'=>'PageController@getCheckout'
]);

Route::post('get_book_customer',[
    'as'=>'dathang1',
    'uses'=>'PageController@postCheckout1'
]);
Route::post('get_book_user',[
    'as'=>'dathang2',
    'uses'=>'PageController@postCheckout2'
]);

Route::get('logout',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);

Route::get('search',['as'=>'search','uses'=>'PageController@search']);

Route::get('inform',['as'=>'inform', 'uses'=>'PageController@getInform']);

Route::get('demo',['as'=>'demo','uses'=>'PageController@demo']);