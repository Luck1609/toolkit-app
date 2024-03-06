
<?php

  use App\Http\Controllers\SpcMeetingController;
  use Illuminate\Support\Facades\Route;

  Route::post('/spc/update-members/{meeting}', [SpcMeetingController::class, 'update_members']);
  Route::patch('/spc/{meeting}/update-meeting', [SpcMeetingController::class, 'update_meeting']);
  Route::patch('/spc/{meeting}/update-minute', [SpcMeetingController::class, 'update_minutes']);
  Route::apiResource('/spc', SpcMeetingController::class);
