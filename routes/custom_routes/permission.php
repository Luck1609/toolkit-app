<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

  Route::apiResource('/permission', PermissionController::class);
