<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');


Route::get('/services/nidhi-software', function () {
    return view('services.nidhi-software');
})->name('nidhi-software');

Route::get('/services/nbfc-software', function () {
    return view('services.nbfc-software');
})->name('nbfc-software');

Route::get('/services/erp-accounting', function () {
    return view('services.erp-accounting');
})->name('erp-accounting');

Route::get('/services/mobile-development', function () {
    return view('services.mobile-apps');
})->name('mobile-apps');

Route::get('/services/ecommerce', function () {
    return view('services.ecommerce');
})->name('ecommerce');


Route::get('/services/cloud-hosting', function () {
    return view('services.cloud-hosting');
})->name('cloud-hosting');
