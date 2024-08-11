<?php

use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CVController::class, 'home'])->name("home");
Route::post('/generate_cv', [CVController::class, 'generate_cv'])->name("generate_cv");
