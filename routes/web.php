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


//Creamos un grupo de admin para que tenga un prefijo las rutas de la administracion
Route::group(['as' => 'admin.','prefix'=>'admin'],function() {

    Route::resource('category','CategoriaController');
    Route::resource('products','ProductsController');

});

Route::get('/',function (){
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
