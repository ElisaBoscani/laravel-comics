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
    return view('home');
})->name('home');


Route::get('/comics', function () {
    $comics = config('db.comics');
    $linkPage = config('db.linkPage');
    return view('comics', compact('comics', 'linkPage'));
})->name('comics');

Route::get('/characters', function () {

    return view('characters');
})->name('characters');
