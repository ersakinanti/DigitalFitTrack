<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('latihan.index');
});

// Rute CRUD untuk Latihan
Route::resource('latihan', LatihanController::class);
