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

Auth::routes();

Route::get('/dashboard', 'pageController@index');

Route::get('/reset', 'Auth\ResetPasswordController@index');

Auth::routes();

Route::get('/dashboard', 'pageController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/poll', 'pollController@index');
Route::get('/polls', 'pollsController@index');



// Route::get('/choice', 'choiceController@index');
Route::get('/choice', 'choiceController@create');
Route::post('/choice', 'choiceController@store');