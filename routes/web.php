<?php

use App\Http\Controllers\ContactController;
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
});

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
Route::get('/projecten', function () {
    return view('projecten');
});

// Route for getting about us page.
Route::get('/over-ons', function () {
    return view('about');
});

/* Services */
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


Route::get('/mail', function () {
    $data = [
        'test' => "Testing"
    ];
    return new App\Mail\ContactMail($data);
});
