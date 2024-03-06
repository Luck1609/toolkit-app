<?php

namespace App\Http\Requests\Tsc;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\TscMeeting;
use App\Models\Quarter;

class UpdateTscMeetingRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'venue' => ['required'],
      'date' => ['required', 'date'],
    ];
  }

  public function process_meeting($request, TscMeeting $meeting)
  {
    $date = date_create($request->date);

    $meeting->update([...$request->all(), 'date' => date_format($date, "Y-m-d H:i")]);
    
    // Finalize quarter to prevent new entry
    $quarter = Quarter::where('status', true)->first();
    $quarter->update(['finalized' => true]);

    return $meeting;
  }
}
