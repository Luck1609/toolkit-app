<?php

  use App\Http\Controllers\TscMeetingController;
use Illuminate\Support\Facades\Route;

  Route::post('/tsc/update-members/{meeting}', [TscMeetingController::class, 'update_members']);
  Route::patch('/tsc/{meeting}/update-meeting', [TscMeetingController::class, 'update_meeting']);
  Route::patch('/tsc/{meeting}/update-minute', [TscMeetingController::class, 'update_minutes']);
  Route::apiResource('/tsc', TscMeetingController::class);
