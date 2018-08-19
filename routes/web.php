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
    return view('search');
});

Route::post('advanced_search_results', 'Controller@advanced_search_results');

Route::get('contact', function() {
	return view('contact');
});

Route::get('testing', function() {
	return view('testing');
});

Route::get('about', function() {
  return view('about');
});

Route::get('search', function() {
  return view('search');
});

Route::get('contact_us', function() {
	return view('contact_us');
});
