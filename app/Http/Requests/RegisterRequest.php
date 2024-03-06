<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use App\Models\Staff;

class RegisterRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return false;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => ['required'],
      'email' => ['required', 'email', 'unique:staff,email'],
      'contact' => ['required', 'string', 'min:10', 'max:13'],
      'role' => ['required', Rule::in(['Planning Officer', 'Assistant Planning Officer', 'Technical Officer', 'Secretary'])],
      'office_id' => [Rule::requiredIf(function () use ($request) {
        return $request->get('role') !== 'Planning Officer';
      })],
      'password' => [Rule::requiredIf(function () use ($request) {
        return $request->get('role') === 'Planning Officer';
      }), 'min:6']
    ];
  }
}
