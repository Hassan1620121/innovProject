<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\AboutController;
use app\Http\Controllers\ContentWritingController;
use app\Http\Controllers\GraphicDesignController;
use app\Http\Controllers\ContactController;
use app\Http\Controllers\WebDevelopmentController;





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

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/contentwriting', function () {
    return view('pages.contentwriting');
});

Route::get('/graphicdesign', function () {
    return view('pages.graphicdesign');
});

Route::get('/webdevelopment', function () {
    return view('pages.webdevelopment');
});

Route::get('/used{id}', function () {
    return $id;
});









