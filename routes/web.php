<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// // Dedicated Individual Service Pages
// Route::get('/services/nidhi-software', function () {
//     return view('services.nidhi-software');
// });

// Route::get('/services/nbfc-software', function () {
//     return view('services.nbfc-software');
// });

// Route::get('/services/erp-accounting', function () {
//     return view('services.erp-accounting');
// });

// Route::get('/services/mobile-development', function () {
//     return view('services.mobile-development');
// });

// Route::get('/services/web-development', function () {
//     return view('services.web-development');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
