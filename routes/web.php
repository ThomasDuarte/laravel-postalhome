<?php

use App\Http\Controllers\ParcelController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ParcelController::class, 'home_index']);

Route::get('/register', [ParcelController::class, 'register_index']);

Route::post('/register',   [ParcelController::class, 'register_new_parcel']);
