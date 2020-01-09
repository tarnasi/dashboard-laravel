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

// login - register - reset pass - ...
Auth::routes();

// Admin Page
Route::get('/panel', 'AdminController@panel')->name('panel');

// site pages
Route::namespace('Site')->group(function() {
    Route::get("/", 'PagesController@index')->name('homepage');
    Route::get("/about", 'PagesController@about')->name('about');
    Route::get("/category", 'PagesController@category')->name('category');
    Route::get("/contact", 'PagesController@contact')->name('contact');
    Route::get("/single", 'PagesController@show')->name('single');
});

Route::namespace('Admin')->group(function() {
    Route::resource('/panel/articles', 'ArticleController');
    Route::resource('/panel/categories', 'CategoryController');
});
