<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

  Route::apiResource('/role', RoleController::class);
