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

Route::get('/', 'homecontroller@indexHome')->name('home');
Route::get('/about', 'homecontroller@indexAbout')->name('about');
Route::get('/blog', 'homecontroller@indexBlog')->name('blog');


Route::get('articles_api', 'homecontroller@articles_api')->name('articles');


Route::resource('articles', 'ArticleController');
/* Route::resource('admins', 'AdminController'); */

/* 
Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
}); */