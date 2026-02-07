<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingPageController extends Controller
{
    public function showLandingPage()
    {
        return Inertia::render('LandingPage', [
            '$items' => Item::all()
        ]);
    }
}
