<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
 Route::resource('kategoris','kategoriController');
 Route::resource('berita','BeritasController');
});

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin|penulis']],function(){
 Route::resource('berita','BeritasController');
});

Route::get('/','FrontendController@index');
Route::get('/kategori/{id}','FrontendController@filter');
Route::get('/selengkapnya/{slug_judul}','FrontendController@selengkapnya');

Route::group(['middleware'=>'cors'],function(){
 	Route::get('/listdata','ApiController@listdata');
 });