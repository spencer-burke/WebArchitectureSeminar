<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Landing');
});

Route::get('/items', function () {
    return view('_Items');
})->name('items');
