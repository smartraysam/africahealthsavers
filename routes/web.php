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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/about', function () {
    return view('about');
});
Route::get('/causes', function () {
    return view('causes');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/give', function () {
    return view('give');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/single-causes', function () {
    return view('single-causes');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/event',  'EventsController@index');

Route::get('/blog',  'NewsController@index');

Route::get('/add_blog', function () {
    return view('blog.post_news');
});
Route::get('/add_event', function () {
    return view('event.add_event');
});

Route::get('/category', 'CategoryController@index')->name('category');
Route::post('/add_category', 'CategoryController@create')->name('add_category');