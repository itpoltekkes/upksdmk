<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing/main');
});
Route::get('/course', function () {
    return view('landing/course');
});
Route::get('/about', function () {
    return view('landing/about');
});
Route::get('/teams', function () {
    return view('landing/teams');
});
Route::get('/contact', function () {
    return view('landing/contact');
});
Route::get('/course-details', function () {
    return view('landing/course-details');
});
Route::get('/btcls', function () {
    return view('landing/btcls');
});
Route::get('/dental', function () {
    return view('landing/dental');
});
Route::get('/preceptor-mentorship', function () {
    return view('landing/ci');
});