<?php

use App\Http\Controllers\MaskapaiController;
use Illuminate\Support\Facades\Route;

Route::get('/maskapai', [MaskapaiController::class, 'index']);
Route::get('/maskapai/{id}', [MaskapaiController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
