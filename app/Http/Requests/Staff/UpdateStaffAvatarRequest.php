<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStaffAvatarRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'avatar' => ['required', 'image', 'mimes:png,jpg']
    ];
  }

  public function upload($request)
  {
    // File name together with the extension only
    $image = $request->avatar;
    $extension = $image->getClientOriginalExtension();

    // $post_title = str_replace(' ', '_', strtolower($request->title));

    // Image is uploaded to the online directory
    $path = $image->storeAs('public/uploads/profiles/', strtolower($request->user()->email) . '.' . $extension);

    if ($path) return str_replace('public', 'storage', $path);
  }
}
