<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
