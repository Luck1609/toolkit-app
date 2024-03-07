<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Toolkit\ApplicationController;


  // Route::get('/applications/{category}', [ApplicationController::class, 'index']);
  Route::resource('application', ApplicationController::class);
