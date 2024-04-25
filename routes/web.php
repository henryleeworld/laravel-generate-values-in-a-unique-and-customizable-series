<?php

use App\Http\Controllers\GeneratorController;
use Illuminate\Support\Facades\Route;

Route::get('/serial/generate', [GeneratorController::class, 'index']);
