<?php

namespace App\Http\Requests\Locality;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLocalityRequest extends FormRequest
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
        'name' => ['required'],
        'initials' => ['required', 'max:10']
      ];
    }
}
