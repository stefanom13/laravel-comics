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
    return view('home');
})->name('home');

Route::get('/infocard', function () {
    return view('infocard');
})->name('infocard');

Route::get('/comics.index', function () {
    return view('comics');
})->name('comics.index');

Route::get('/games.index', function () {
    return view('games');
})->name('games.index');

Route::get('/tv.index', function () {
    return view('tv');
})->name('tv.index');

Route::get('/movies.index', function () {
    return view('movies');
})->name('movies.index');

Route::get('/collectibles.index', function () {
    return view('collectibles');
})->name('collectibles.index');

Route::get('/videos.index', function () {
    return view('videos');
})->name('videos.index');

Route::get('/fans.index', function () {
    return view('fans');
})->name('fans.index');

Route::get('/news.index', function () {
    return view('news');
})->name('news.index');

Route::get('/shop.index', function () {
    return view('shop');
})->name('shop.index');

Route::get('/characters.index', function () {
    return view('characters');
})->name('characters.index');
