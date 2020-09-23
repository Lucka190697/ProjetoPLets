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
     Route::get('/', 'UserController@index')->name('user.index')->middleware('auth');
     Route::get('/create', 'UserController@create')->name('user.create')->middleware('auth');
     Route::post('/store', 'UserController@store')->name('user.store')->middleware('auth');
     Route::get('/edit/{user}', 'UserController@edit')->name('user.edit')->middleware('auth');
     Route::put('/update/{user}', 'UserController@update')->name('user.update')->middleware('auth');
     Route::get('/show/{user}', 'UserController@show')->name('user.show')->middleware('auth');
     Route::get('/destroy/{user}', 'UserController@destroy')->name('user.destroy')->middleware('auth');
     Route::get('/search', 'BooksController@search')->name('user.search')->middleware('auth');
 });

 Route::group(['prefix' => 'books'], function () {
     Route::get('/', 'BooksController@index')->name('books.index')->middleware('auth');
     Route::get('/create', 'BooksController@create')->name('books.create')->middleware('auth');
     Route::post('/store', 'BooksController@store')->name('books.store')->middleware('auth');
     Route::get('/edit/{id}', 'BooksController@edit')->name('books.edit')->middleware('auth');
     Route::put('/update/{id}', 'BooksController@update')->name('books.update')->middleware('auth');
     Route::get('/show/{id}', 'BooksController@show')->name('books.show')->middleware('auth');
     Route::get('/destroy/{id}', 'BooksController@destroy')->name('books.destroy')->middleware('auth');
     Route::get('/search', 'BooksController@search')->name('books.search')->middleware('auth');
 });

Route::group(['prefix' => 'book_loans'], function () {
    Route::get('/', 'LoanController@index')->name('loans.index')->middleware('auth');
    Route::get('/create', 'LoanController@create')->name('loans.create')->middleware('auth');
    Route::get('/create', 'LoanController@create')->name('loans.create')->middleware('auth');
    Route::post('/store', 'LoanController@store')->name('loans.store')->middleware('auth');
    Route::get('/edit/{id}', 'LoanController@edit')->name('loans.edit')->middleware('auth');
    Route::put('/update/{id}', 'LoanController@update')->name('loans.update')->middleware('auth');
    Route::get('/show/{id}', 'LoanController@show')->name('loans.show')->middleware('auth');
    Route::get('/destroy/{id}', 'LoanController@destroy')->name('loans.destroy')->middleware('auth');
    Route::get('/search', 'LoanController@search')->name('loans.search')->middleware('auth');
    Route::get('/reservation/{id}', 'LoanController@reservation')->name('loans.reservation')->middleware('auth');
});
