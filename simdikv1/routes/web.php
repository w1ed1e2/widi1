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

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
	Route::get('/','PagesController@home');
	Route::resource('anggaran', 'AnggaranController');	
	Route::get('kabupaten','KabupatenController@index');
	Route::resource('lembaga','LembagaController');
	Route::resource('tenaga','TenagaController');
	Route::resource('bahanajar','BahanajarController');	
	Route::resource('alumni','AlumniController');
	Route::resource('pwmp','PwmpController');
	Route::resource('tubel','TubelController');
	Route::resource('alatpraktik','AlatpraktikController');
	Route::get('propinsi', 'PropinsiController@index');
	Route::get('prodi', 'ProdiController@index');
	Route::get('frontend', 'FrontendController@index');
});