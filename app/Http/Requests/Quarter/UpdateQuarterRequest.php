<?php

namespace App\Http\Requests\Quarter;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Quarter;

class UpdateQuarterRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }


  public function rules()
  {
    return [
      //
    ];
  }

  public function close_session(Quarter $quarter)
  {
    // retrieve all applications for this session
    $applications = $quarter->applications()->where(function ($query) {
        $query->where('processed', true)
              ->where('approved', true);
      })->get();
    // dispatch event to create permit numbers
    CloseSession::dispatch($applications);

    // change session status to completed
    $quarter->update(['status' => 'Completed']);
  }
}
