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

Route::get('/wall', 'PostController@printWall')
->name('wall')->middleware('auth');

Route::post('/savePost', 'PostController@savePost')
->name('savePost')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/films', 'FilmsController@index')
->name('films')->middleware('auth');

Route::get('/genre/{id_genre}', 'FilmsController@showGenre')
->name('genre')->middleware('auth');

Route::get('/distributeur/{id_distributeur}', 'FilmsController@showDistributeur')
->name('distributeur')->middleware('auth');