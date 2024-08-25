<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
});
Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy');
});
Route::get('/refund-and-returns-policy', function () {
    return Inertia::render('RefundPolicy');
});
Route::get('/terms-and-conditions', function () {
    return Inertia::render('Terms');
});

Route::get('/enquire-now', function () {
    return Inertia::render('Enquire');
});

Route::get('/tour-packages', function () {
    return Inertia::render('TourPackages');
});

Route::get('/2-days-tour-packages', function () {
    return Inertia::render('TourPackages2');
});


// ERROR PAGE
Route::fallback(function () {
    return Inertia::render('ErrorPage');
});
// ERROR PAGE


