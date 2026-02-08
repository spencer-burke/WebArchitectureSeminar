<?php

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Landing', [
        'items' => Item::all()
    ]);
});

Route::post('/', function (Request $request) {
    Item::create([
        'name' => $request->name,
        'description' => $request->description,
    ]);

    return redirect()->back();
});

