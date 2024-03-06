<?php

  use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

  Route::apiResource('/settings', SettingsController::class);
  Route::get('/current-settings/{id}/{label?}', [SettingsController::class, 'current_settings']);
  Route::get('/settings/titles', [SettingsController::class, 'index']);

