<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingsRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'option' => ['required'],
      'display_name' => ['required'],
      'options' => ['required',
        function ($attribute, $value, $fail) {
          if (gettype($value) !== 'string' || gettype($value) !== 'array') {
            $fail('The '.$attribute.' is invalid.'.gettype($value));
          }
          // if (!is_string($value) || !is_array($value)) {
          //   $fail('The '.$attribute.' is invalid.');
          // }
        }
      ],
      // 'options.*' => [
      //   function ($attribute, $value, $fail) {
      //     if (!is_string($value) || !is_array($value)) {
      //       $fail('The '.$attribute.' must be a string or an array.');
      //     }
      //   }
      // ]
      // 'options.*' => ['string']
    ];
  }
}
