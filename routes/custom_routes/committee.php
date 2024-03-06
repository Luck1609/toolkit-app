<?php

use App\Http\Controllers\CommitteeController;
use Illuminate\Support\Facades\Route;


  Route::get('/committee-members/{panel}', [CommitteeController::class, 'index']);
  Route::apiResource('/committee', CommitteeController::class);
