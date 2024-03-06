<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Toolkit\OfficeController;

  Route::patch('/office/update-email', [OfficeController::class, 'update_email']);
  Route::patch('/office/update-initials', [OfficeController::class, 'update_initials']);
  Route::patch('/office/update-contact', [OfficeController::class, 'update_contact']);
  Route::patch('/office/update-district', [OfficeController::class, 'update_district']);
  Route::post('/office/update-logo', [OfficeController::class, 'update_logo']);
  Route::apiResource('/office', OfficeController::class);


  Route::get('/dashboard-stats', [OfficeController::class, 'stats']);
  Route::get('/preflight', [OfficeController::class, 'preflight_check']);
  Route::post('/register-office', [OfficeController::class, 'store']);
