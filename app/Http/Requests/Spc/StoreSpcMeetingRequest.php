<?php

namespace App\Http\Requests\Spc;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpcMeetingRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'title' => ['required'],
      'venue' => ['required'],
      'date' => ['required', 'date'],
    ];
  }
}
