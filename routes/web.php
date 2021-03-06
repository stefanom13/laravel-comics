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


Route::get('/comics', function () {

    $comics = config('comics');

    return view('comics')->with('comics', $comics);

})->name('comics.index');

Route::get('/infocard', function () {
    return view('infocard');
})->name('infocard');


Route::get('/games', function () {
    return view('games');
})->name('games.index');

Route::get('/tv', function () {
    return view('tv');
})->name('tv.index');

Route::get('/movies', function () {
    return view('movies');
})->name('movies.index');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles.index');

Route::get('/videos', function () {
    return view('videos');
})->name('videos.index');

Route::get('/fans', function () {
    return view('fans');
})->name('fans.index');

Route::get('/news', function () {
    return view('news');
})->name('news.index');

Route::get('/shop', function () {
    return view('shop');
})->name('shop.index');

Route::get('/characters', function () {
    return view('characters');
})->name('characters.index');

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');
    abort_if(!isset($comics[$id]), 404);
    $detail = $comics[$id];

    return view('infocard')->with('comics', $detail);

})->where('id', '[0-9]+')->name('comic.show');