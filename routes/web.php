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
    return view('index');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/projecten', function () {
    return view('projecten');
});
Route::get('/over-ons', function () {
    return view('about');
});
/* services */
Route::get('/services/website', function () {
    return view('services/website');
});
Route::get('/services/webshop', function () {
    return view('services/webshop');
});
Route::get('/services/seo', function () {
    return view('services/seo');
});
Route::get('/services/onderhoud', function () {
    return view('services/onderhoud');
});

/* Juridisch */
Route::get('/algemene-voorwaarden', function () {
    return view('voorwaarden');
});
Route::get('/privacybeleid', function () {
    return view('privacy');
});
