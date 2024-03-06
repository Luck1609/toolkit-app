<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\DeferredRecords;
// use App\Models\Settings;
// use App\Models\Office;
use App\Models\Application;
use App\Models\SmsNotification;
use App\Traits\ApiResponse;

use App\Events\ApplicationDeferred;
use App\Events\ApplicationApproved;

class UpdateApplicationRequest extends FormRequest
{
  use ApiResponse;

  public function authorize()
  {
    return true;
  }


  public function rules()
  {
    return [

    ];
  }

  public function process_application($request, $application)
  {
    try {
      if ($request->action === 'recommend') {
        $application->update(['recommended' => true]);
        return 'Application successfully recommended';
      }
      elseif ($request->action === 'approve') {
        $application->update(['approved' => true, 'approved_on' => now()]);

        $this->save_message($application, 'approved_application_message');

        return 'Application successfully approved';
      }
      elseif ($request->action === 'defer') {
        return $this->process_deferred($request, $application);
      }
      else {
        $application->update([$request->all()]);

        return 'Permit numbers successfully updated';
      }
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }
  }



  protected function process_deferred($request, $application)
  {
    try {
      if (empty($application->decision) && empty($request->comment)) abort(422, 'Reasons for deferring application is required');

      $application->update([
        'processed' => true,
        'deferred' => true
      ]);

      if (!$application->deferred) {
        DeferredRecords::create([
          'processed' => false,
          'comments' => $request->comment,
          'application_id' => $application->id,
          'deferred_on' => now()
        ]);

        $this->save_message($application, 'deferred_application_message');
      }

      return 'Application successfully deferred';
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }

  }


  protected function save_message(Application $application, $type) {

    $saved = (new SmsNotification)->store_sms(
      $application->contact,
      $this->get_message_from_settings($type, [
        'title' => $application->title,
        'lastname' => $application->lastname
      ]),
      [
        'type' => 'application',
        'staff_id' => auth()->user()->id,
        'display_name' => 'Deferred application',
      ]
    );

    return $saved;
  }
}
