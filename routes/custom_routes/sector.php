<?php

use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Route;

  Route::get('/sectors/{type}', [SectorController::class, 'get_sectors']);
  Route::apiResource('/sector', SectorController::class);
