
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;

Route::get('/', function () {
    return view('home');
});

Route::get('/places', [PlaceController::class, 'index']);
