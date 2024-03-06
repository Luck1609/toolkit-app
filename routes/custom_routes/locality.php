<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalityController;

  Route::apiResource('/locality', LocalityController::class);
