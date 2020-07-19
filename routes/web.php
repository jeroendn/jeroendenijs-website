<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'PageController@index')->name('home');
Route::get('/home', 'PageController@index')->name('home');
Route::get('/projects', 'PageController@projects')->name('projects');
Route::get('/contact', 'PageController@contact')->name('contact');
