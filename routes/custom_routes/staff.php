<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

  Route::patch('/staff/update-email', [StaffController::class, 'update_email']);
  Route::patch('/staff/update-password', [StaffController::class, 'update_password']);
  Route::patch('/staff/update-contact', [StaffController::class, 'update_contact']);
  Route::post('/staff/update-profile', [StaffController::class, 'update_avatar']);
  Route::apiResource('/staff', StaffController::class);


  Route::get('/staff-data', [StaffController::class, 'me']);
  Route::post('/register-officer', [StaffController::class, 'store']);
  Route::get('/account-details/{locked-user}', [StaffController::class, 'account_details']);
  Route::post('/staff/password-reset', [StaffController::class, 'reset_password']);
