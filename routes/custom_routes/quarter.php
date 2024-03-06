<?php

use App\Http\Controllers\QuarterController;
use Illuminate\Support\Facades\Route;

  Route::get('/current-quarter', [QuarterController::class, 'current_quarter']);
  Route::get('/current-quarter/status', [QuarterController::class, 'status']);
  Route::get('/quarter/{quarter}/{category}', [QuarterController::class, 'show']);
  Route::apiResource('/quarter', QuarterController::class);
