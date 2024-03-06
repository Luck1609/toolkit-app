<?php

namespace App\Http\Requests\Tsc;

use Illuminate\Foundation\Http\FormRequest;

class StoreTscMeetingRequest extends FormRequest
{

  public function authorize()
  {
    return false;
  }

  public function rules()
  {
    return [
      // 'title' => ['required'],
      'venue' => ['required'],
      'date' => ['required', 'date'],
    ];
  }
}
