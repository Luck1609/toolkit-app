<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\SMS\SMS_Notification as SMS;
use App\Models\SmsNotification;

use App\Traits\ApiResponse;

class StoreSmsNotificationRequest extends FormRequest
{
  use ApiResponse;

  public function authorize()
  {
    return true;
  }


  public function rules()
  {
    return [
      'message' => ['required'],
      'contacts' => ['required'],
      'bulk' => ['required', 'boolean'],
      'status' => ['required', 'boolean']
    ];
  }

  public function process_sms($request)
  {
    // return $request->message;
    $contacts = is_array($request->contacts) ? $request->contacts : [$request->contacts];
    try {
      $sms = SMS::send($contacts, $request->message, [
        'type' => 'custom',
        'display_name' => 'Custom',
        'staff_id' => auth()->user()->id,
        'message_type' => 'custom',
      ]);

      return $sms;
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
      // return $err->getMessage();
    }
  }
}
