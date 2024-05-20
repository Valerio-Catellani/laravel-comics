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
    return redirect()->route('home');
});

Route::get('/home', function () {
    $data = config('mydb');
    return view('home', compact('data'));
})->name('home');

Route::get('/movies', function () {
    $data = config('mydb');
    return view('movies', compact('data'));
})->name('movies');

Route::get('/comics', function () {
    $data = config('mydb');
    return view('comics', compact('data'));
})->name('comics');
