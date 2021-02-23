<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function(){
 return view('home');
})->name('home');

Route::get('/about', function(){
	return view ('about');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postLogin')->name('postLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){


	Route::get('/siswa', 'SiswaController@index')->name('siswa.view');

	Route::get('/siswa/siswatambah', 'SiswaController@create');
	
	Route::post('/siswa/store', 'SiswaController@store')->name('siswa.store');
	Route::get('/siswa/edit/{id}', 'SiswaController@edit')->name('siswa.edit');
	Route::put('/siswa/update/{id}', 'SiswaController@update')->name('siswa.update');
	Route::delete('/siswa/delete/{id}', 'SiswaController@hapus')->name('siswa.hapus');

});




