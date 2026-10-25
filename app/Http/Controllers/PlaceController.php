<?php

namespace App\Http\Controllers;

use App\Models\Place;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();

        return view('places', compact('places'));
    }
}
