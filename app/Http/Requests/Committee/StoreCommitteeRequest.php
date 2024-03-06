<?php

namespace App\Http\Requests\Committee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCommitteeRequest extends FormRequest
{
  /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
  public function authorize()
  {
      return true;
  }

  /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, mixed>
    */
  public function rules()
  {
    return [
      'firstname' => ['required'],
      'lastname' => ['required'],
      'email' => ['email', 'unique:committee_members'],
      'contact' => ['required', 'unique:committee_members'],
      'designation' => ['required'],
      'role' => [
        'required',
        Rule::in(['Chairperson', 'Secretary', 'Member', 'Other'])
      ],
      'title' => [
        'required',
        Rule::in(['Dr.', 'Eng', 'Mr.', 'Mrs', 'Miss'])
      ],
    ];
  }
}
