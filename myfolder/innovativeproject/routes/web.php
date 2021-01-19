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
Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});



Route::get('/powerautomate', function () {
    return view('pages.powerautomate');
});

Route::get('/dynamic365', function () {
    return view('pages.dynamic365');
});

Route::get('/whatdynamic', function () {
    return view('pages.whatdynamic');
});




Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/contentwriting', function () {
    return view('pages.contentwriting');
});

Route::get('/digitalmarketing', function () {
    return view('pages.digitalmarketing');
});


Route::get('/graphicdesign', function () {
    return view('pages.graphicdesign');
});

Route::get('/seo', function () {
    return view('pages.seo');
});

Route::get('/webdevelopment', function () {
    return view('pages.webdevelopment');
});




