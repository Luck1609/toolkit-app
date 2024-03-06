<?php

namespace App\Http\Requests\Committee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCommitteeRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }


  public function rules()
  {
    return [
      'firstname' => ['string'],
      'lastname' => ['string'],
      'email' => ['email'],
      'contact' => ['string'],
      'designation' => ['string'],
      'role' => [
        Rule::in(['Chairperson', 'Secretary', 'Member', 'Other'])
      ],
      'title' => [
        'string',
        Rule::in(['Dr.', 'Eng.', 'Mr.', 'Mrs', 'Ms.'])
      ],
    ];
  }
}
