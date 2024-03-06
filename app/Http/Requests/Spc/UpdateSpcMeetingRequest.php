<?php

namespace App\Http\Requests\Spc;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\SpcMeeting;

class UpdateSpcMeetingRequest extends FormRequest
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

  public function process_meeting($request, SpcMeeting $meeting)
  {
    // $meeting = SpcMeeting::find($spcMeeting);

    $date = date_create($request->date);

    $meeting->update([
      'venue' => $request->venue,
      'date' => now()
    ]);
    // $meeting->date = date_format($date, "Y-m-d H:i");
    // $meeting->save();

    return $meeting;
  }
}
