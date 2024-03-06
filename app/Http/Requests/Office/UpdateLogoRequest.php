<?php

namespace App\Http\Requests\Office;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLogoRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }


  public function rules()
  {
    return ['logo' => ['required', 'image', 'mimes:png,jpg']];
  }


  public function upload($logo)
  {
    // File name together with the extension only
    $image = $logo;
    $extension = $image->getClientOriginalExtension();

    // $post_title = str_replace(' ', '_', strtolower($request->title));

    // Image is uploaded to the online directory
    $path = $image->storeAs('public/uploads/offices/', strtolower(auth()->user()->email) . '.' . $extension);

    if ($path) return str_replace('public', 'storage', $path);
  }
}
