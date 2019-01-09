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
  return view('principal');
});

Route::get('/home', function () {
  return view('principal');
})->name('home');;

Auth::routes();

Route::group(['middleware'=> 'web'],function(){
  Route::resource('noticia','\App\Http\Controllers\NoticiaController');
  Route::post('noticia/{id}/update','\App\Http\Controllers\NoticiaController@update');
  Route::get('noticia/{id}/delete','\App\Http\Controllers\NoticiaController@destroy');
  Route::get('noticia/{id}/deleteMsg','\App\Http\Controllers\NoticiaController@DeleteMsg');
});
