<?php

namespace App\Http\Requests\Sector;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSectorRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }


  public function rules()
  {
    return [
      'locality_id' => ['required', 'integer'],
      'name' => ['required'],
      'initials' => ['required', 'max:10'],
      'blocks' => ['required', 'array'],
      'blocks.*' => ['required', 'string'],
    ];
  }
}
