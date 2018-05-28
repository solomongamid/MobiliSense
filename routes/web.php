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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/actu', 'NewsController@index')->name('actu');
Route::get('/study', 'StudyController@index')->name('study');
Route::get('/benevole', 'Benevole\BenevoleController@index')->name('benevole');


Route::get('/adminHome', 'AdminController@index')->name('adminHome');
Route::get('/newsHome', 'AdminController@indexNews');
Route::get('/addNews', 'AdminController@newsForm');
Route::post('/addNews', 'AdminController@store');
Route::get('/delete/{news}','AdminController@destroy');
Route::get('/newsHome/{news}', 'AdminController@showNews');
Route::post('/newsHome/{news}','AdminController@updateNews');

// Gestion des vagues
Route::get('/wave', 'AdminController@waveForm');
Route::post('/wave1', 'AdminController@wave1');
Route::post('/betweenwave', 'AdminController@betweenwave');
Route::post('/wave2', 'AdminController@wave2');
Route::post('/stopwave', 'AdminController@stopwave');


Route::get('/userHome', 'Auth\RegisterController@indexUser');
Route::get('/deleteUser/{user}','Auth\RegisterController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Approve users
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
