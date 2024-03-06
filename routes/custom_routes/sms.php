<?php

use App\Http\Controllers\SmsNotificationController;
use Illuminate\Support\Facades\Route;

  Route::get('/sms/{type}', [SmsNotificationController::class, 'index']);
  Route::apiResource('/sms', SmsNotificationController::class);
