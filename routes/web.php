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

Route::resource('managers','crudManagers');

/*Route::get('/manager', function () {
    return view('/manager/create');
});
*/
Route::get('/manager','crudManagers@index')->name('managers.index');
Route::get('/manager/create','crudManagers@create')->name('managers.create');
Route::post('/manager','crudManagers@store')->name('managers.store'); // making a post request
Route::get('/manager/{id}','crudManagers@show')->name('managers.show');
Route::get('/manager/{id}/edit','crudManagers@edit')->name('managers.edit');
Route::put('/manager/{id}','crudManagers@update')->name('managers.update'); // making a put request
Route::delete('/manager/{id}','crudManagers@destroy')->name('managers.destroy'); // making a delete request

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
