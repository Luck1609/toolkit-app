<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
      'password' => ['required'],
      'email' => ['required', 'email']
    ];
  }

  /**
   * Configure the validator instance.
   *
   * @param Validator $validator
   * @return void
   */
  public function withValidator(Validator $validator)
  {
    $validator->after(function ($validator) {

      /** @var User $user */
      $user = User::where('email', $this->request->get('email'))->first();
      if ($user == null) $this->addUserEmailValidationError($validator);
      else {
        if (!Hash::check($this->request->get('password'), $user->password))
          $this->addUserEmailValidationError($validator);
      }

    });

  }


  private function addUserEmailValidationError(Validator $validator)
  {
    $validator->errors()->add('email', 'Incorrect email or password provided');
  }
}
