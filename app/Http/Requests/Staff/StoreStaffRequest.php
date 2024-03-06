<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStaffRequest extends FormRequest
{

  public function authorize()
  {
      return true;
  }


  public function rules()
  {
    return [
      'firstname' => ['required'],
      'lastname' => ['required'],
      'email' => ['required', 'email', 'unique:staff'],
      'contact' => ['required', 'unique:staff'],
      'role' => ['required'],
      'title' => [
        'required',
        Rule::in(['Dr.', 'Eng.', 'Mr.', 'Mrs.', 'Miss'])
      ],
    ];
  }
}
