<?php

namespace App\Http\Requests\Office;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    
  public function authorize()
  {
    return true;
  }

  
  public function rules()
  {
    return [
      'contact' => ['required']
    ];
  }
}
