<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/home');
});

Route::get('/about-us', function () {
    return view('user/about-us');
});

Route::get('/portfolio', function () {
    return view('user/portfolio');
});

Route::get('/blog', function () {
    return view('user/blog');
});

Route::get('/contact-us', function () {
    return view('user/contact-us');
});
