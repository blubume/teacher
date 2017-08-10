<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/application_ok', function () {
    return view('application_ok');
});
Route::get('/application', function () {
    return view('application');
});
Route::get('/balance', function () {
    return view('balance');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/reject', function () {
    return view('reject');
});
Route::get('/request', function () {
    return view('request');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/video', function () {
    return view('video');
});