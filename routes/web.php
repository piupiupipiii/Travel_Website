<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MaskapaiController;



Route::get('/maskapai', [BookingController::class, 'showPesawatForm']);
Route::post('/maskapai/search', [BookingController::class, 'searchPesawat']);
Route::post('/maskapai/book', [BookingController::class, 'bookPesawat']);

Route::get('/hotel', [BookingController::class, 'showHotelForm']);
Route::post('/hotel/search', [BookingController::class, 'searchHotel']);
Route::post('/hotel/book', [BookingController::class, 'bookHotel']);

// Rute untuk MaskapaiController
Route::get('/maskapai', [MaskapaiController::class, 'index']);
Route::get('/maskapai/{id}', [MaskapaiController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
});
