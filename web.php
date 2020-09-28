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

//Clouser
Route::get('/profile', function(){
	return "ini adalah profil siswa";
})->name('profil');

//Route Name
Route::get("/tesname", function(){
	return route('profil');
});

//parameter
Route::get('/profil/{id}', function($id){
	return $id;
});

//controller
Route::get("/tescontroller", "Tescontroller@show");

//Resource
Route::resource('siswa', "siswacontroller");