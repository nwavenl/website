<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OfferteController;
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

// Route for homepage
Route::get('/', function () {
    return view('index');
})->name('home');

// Route for getting the service views
Route::get('/services', function () {
    return view('services');
});

// Route for showing contact form
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route for sending contact form.
Route::get(
    '/sendContact',
    [
        ContactController::class,
        'sendMail'
    ]
)->name('send-mail');

// Route for getting project
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/portfolio/ian-remeijsen', function () {
    return view('portfolio/ian');
});

// Route for getting about us page.
Route::get('/over-ons', function () {
    return view('about');
});

/* Services */
Route::get('/services/website', function () {
    return view('services/website');
})->name('website');
Route::get('/services/webshop', function () {
    return view('services/webshop');
})->name('webshop');
Route::get('/services/seo', function () {
    return view('services/seo');
})->name('seo');
Route::get('/services/marketing', function () {
    return view('services/marketing');
})->name('marketing');

// Route for sending offerte form.
Route::get(
    '/sendOfferte',
    [
        OfferteController::class,
        'sendMail'
    ]
)->name('send-offerte');


/* Juridisch */
Route::get('/algemene-voorwaarden', function () {
    return view('voorwaarden');
});
Route::get('/privacybeleid', function () {
    return view('privacy');
});

// Route for sitemap
Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');
