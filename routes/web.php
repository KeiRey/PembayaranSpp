<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Auth Manual
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin ', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => 'auth'], function () {
    //Dashboard
    Route::get('/home', 'HomeController@index')->name('home');
    
    //CRUD Siswa
    Route::get('/Siswa/Index', 'SiswaController@index');
    Route::get('/Siswa/Detail/{id}', 'SiswaController@detail');
    Route::get('/Siswa/Create', 'SiswaController@create');
    Route::post('/Siswa/Store', 'SiswaController@store');
    Route::get('/Siswa/Edit/{id}', 'SiswaController@edit');
    Route::post('/Siswa/update/{id}', 'SiswaController@update');
    Route::get('/Siswa/Delete/{id}', 'SiswaController@delete');

    //CRUD Kelas
    Route::get('/Kelas/Index', 'KelasController@index');
    Route::get('/Kelas/Create', 'KelasController@create');
    Route::post('/Kelas/Store', 'KelasController@store');
    Route::get('/Kelas/Edit/{id}', 'KelasController@edit');
    Route::post('/Kelas/update/{id}', 'KelasController@update');
    Route::get('/Kelas/Delete/{id}', 'KelasController@delete');

});
