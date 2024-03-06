<?php

namespace App\Http\Requests\Office;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfficeRequest extends FormRequest
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
      'district' => ['required', 'unique:office'],
      'initials' => ['required', 'max:10'],
      'shelves' => ['numeric'],
      'region' => ['required']
    ];
  }
}
