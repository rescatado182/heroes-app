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

Route::get('/','PagesController@index')->name('pages.index');
Route::get('/view','PagesController@view')->name('pages.view');
Route::get('/votes','PagesController@votes')->name('pages.votes');

// Create route for json file
Route::get('/heroes.json', 'PagesController@getHeroesContent');
