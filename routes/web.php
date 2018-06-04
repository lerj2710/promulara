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
Route::group(['as' => 'admin.','prefix'=>'admin'],function(){

    Route::resource('products','ProductsController');
    Route::resource('category','CategoriaController');

});


Route::get('/',function (){
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
