<?php

namespace App\Http\Requests\Office;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDistrictRequest extends FormRequest
{
    
  public function authorize()
  {
    return true;
  }

  
  public function rules()
  {
    return [
      'district' => ['required']
    ];
  }
}
