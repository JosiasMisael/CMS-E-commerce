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
})->name('inicio');

//Router Auth
Route::get('/login','ConnectController@getLogin')->name('login.view');
Route::post('/login','ConnectController@postLogin')->name('login.start');
Route::get('/registro','ConnectController@getRegister')->name('registro.view');
Route::post('/register','ConnectController@postRegister')->name('register.store');
Route::get('/logout', 'ConnectController@logout')->name('logout');

