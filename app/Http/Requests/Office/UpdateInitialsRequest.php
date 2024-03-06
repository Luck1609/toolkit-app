<?php

namespace App\Http\Requests\Office;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInitialsRequest extends FormRequest
{
    
  public function authorize()
  {
    return true;
  }

  
  public function rules()
  {
    return ['initials' => ['required', 'max:10']];
  }
}
