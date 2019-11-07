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

// Home
Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');

// Portfolio
Route::get('/single-work', 'PagesController@singlework')->name('single-work');

Route::get('/portfolio', 'PortfolioController@index');
Route::post('/portfolio/project', 'PortfolioController@update');
Route::post('/portfolio', 'PortfolioController@delete');

Route::get('/category/{category}/projects', 'PortfolioCategoryController@projects');
Route::resource('/category', 'PortfolioCategoryController');

// Blog
Route::get('/blog', 'PagesController@blog')->name('blog');

Auth::routes();
Route::get('/home', 'PagesController@home')->name('home');
