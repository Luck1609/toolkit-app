<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStaffRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    $user = $this->user()->id;

    return [
      'status' => [
        'required',
        Rule::in(['Active', 'Banned'])
      ],
    ];
  }
}
