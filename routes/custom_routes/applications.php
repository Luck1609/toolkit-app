<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;


  Route::get('/applications/{category}', [ApplicationController::class, 'index']);
  Route::apiResource('application', ApplicationController::class);
