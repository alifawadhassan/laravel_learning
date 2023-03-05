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
    return view('home', ["link" => "home"]);
});


Route::get('/about', function () {
    $request_uri = $_SERVER['REQUEST_URI'];
    $link = str_replace("/", "", $request_uri);
    return view('about', ["link" => $link]);
});

Route::get('/contact', function () {
    $request_uri = $_SERVER['REQUEST_URI'];
    $link = str_replace("/", "", $request_uri);
    return view('contact', ["link" => $link]);
});

Route::get('/services', function () {
    $request_uri = $_SERVER['REQUEST_URI'];
    $link = str_replace("/", "", $request_uri);
    return view('services', ["link" => $link]);
});
