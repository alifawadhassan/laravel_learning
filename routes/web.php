<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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


Route::get('/login', function () {
    $request_uri = $_SERVER['REQUEST_URI'];
    $link = str_replace("/", "", $request_uri);
    return view('login', ["link" => $link]);
});

Route::get('/register', function () {
    $request_uri = $_SERVER['REQUEST_URI'];
    $link = str_replace("/", "", $request_uri);
    return view('register', ["link" => $link]);
});

// Route::get('/all', function () {
//     $request_uri = $_SERVER['REQUEST_URI'];
//     $link = str_replace("/", "", $request_uri);
//     return view('all', ["link" => $link]);
// });

Route::get('/all', [Users::class, 'list']);
Route::post('/loginSubmit', [Users::class, 'loginSubmit']);
Route::post('/createSubmit', [Users::class, 'createSubmit']);
