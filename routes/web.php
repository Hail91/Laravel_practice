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
// Route to Welcome page (using AppController which will return welcome page)
Route::get('/', 'App\Http\Controllers\AppController@index');
// Route to tracks page
Route::get('/tracks', function () {
    return view('welcome');
});
// Route to community page
Route::get('/community', function () {
    return view('welcome');
});
// Route to support page
Route::get('/support', function () {
    return view('welcome');
});

// Example routes to demonstrate closures in PHP/Laravel
// Closures in PHP are just anonymous functions to perform some kind of code/execution
// They are especially useful in routing, which we'll demonstrate below.
// Route::get('/', function () {
//     $number = 50;
//     return $number * 10;
// });
