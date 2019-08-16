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

Route::group(['prefix' => 'todo'], function () {
    Route::get('/', 'TodoController@index');

    Route::get('/index', 'TodoController@index');
    
    Route::get('/object', 'TodoController@object');
    
    Route::get('/rule', 'TodoController@rule');

    Route::get('/regi', 'TodoController@regi');
    
    Route::post('/', 'TodoController@update');    
});


Route::delete('/todo/{todo}', 'TodoController@destory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
