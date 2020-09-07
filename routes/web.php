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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/user', 'UserController');
// Route::resource('/books', 'BooksController');

Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/create', 'UserController@create')->name('user.create');
    Route::post('/store', 'UserController@store')->name('user.store');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/update/{id}', 'UserController@update')->name('user.update');
    Route::get('/show/{id}', 'UserController@show')->name('user.show');
    Route::get('/destroy/{id}', 'UserController@destroy')->name('user.destroy');
});

Route::group(['prefix' => 'books'], function () {
    Route::get('/', 'BooksController@index')->name('books.index');
    Route::get('/create', 'BooksController@create')->name('books.create');
    Route::post('/store', 'BooksController@store')->name('books.store');
    Route::get('/edit/{id}', 'BooksController@edit')->name('books.edit');
    Route::put('/update/{id}', 'BooksController@update')->name('books.update');
    Route::get('/show/{id}', 'BooksController@show')->name('books.show');
    Route::get('/destroy/{id}', 'BooksController@destroy')->name('books.destroy');
});
