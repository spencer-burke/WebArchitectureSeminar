<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/items', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Item One', 'description' => 'First item'],
        ['id' => 2, 'name' => 'Item Two', 'description' => 'Second item'],
        ['id' => 3, 'name' => 'Item Three', 'description' => 'Third item'],
    ]);
});
