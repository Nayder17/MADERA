<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("index");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/service', function () {
    return view('service');
})->name("services");

Route::get('/place', function () {
    return view('place');
})->name("places");


Route::get('/contact', function () {
    return view('contact');
})->name("contact");

