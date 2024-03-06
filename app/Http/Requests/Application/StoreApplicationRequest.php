<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Office;
use App\Models\Sector;
use App\Models\Locality;
use App\Models\Quarter;
use App\Models\Application;

class StoreApplicationRequest extends FormRequest
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
      'firstname' => ['required'],
      'lastname' => ['required'],
      'title' => ['required'],
      'contact' => ['required'],
      'shelf' => ['nullable', 'integer'],
      'locality_id' => ['required', 'integer'],
      'sector_id' => ['required', 'integer'],
      'block' => ['required'],
      'plot' => ['required'],
      'type' => ['required'],
      'height' => ['integer'],
      'use' => ['required', 'array'],
      'use.*' => ['required'],
      'existing' => ['required'],
    ];
  }

  public function process_application_data($request)
  {
    $duplicate = $this->check_duplicate($request);

    try {
      if ($duplicate['status']) return $duplicate;
    } catch (\Throwable $err) {}

    # "AAMA/SEC 2/ATE/01/21"
    $district_initials = Office::first()->initials;
    $sector_initials = Sector::find($request->sector_id)->first()->initials;
    $locality_initials = Locality::find($request->locality_id)->first()->initials;
    $quarter_info = Quarter::where('status', true)->first();
    $quarter_number = $quarter_info->applications->count();
    $application_order_number = Application::whereYear('created_at', date_create()->format('Y'))->count();


    $entry = $this->double_value($application_order_number);
    $quarter = $this->double_value($quarter_number);

    $yr = date_create()->format('y');

    $application_number = $district_initials
        .'/'.$sector_initials
        .'/'.$locality_initials
        .'/'."$entry"
        .'/'.$yr;

    return $data = [
      ...$this->request->all(),
      'height' => $request->height ?? 1,
      'use' => json_encode($request->use),
      'existing' => $request->existing === 'No' ? 0 : 1,
      'staff_id' => auth()->user()->id,
      'application_num' => $application_number,
      'quarter_num' => "$quarter",
      'staff_id' => auth()->user()->id,
      'quarter_id' => $quarter_info->id,
      'scanned_app_documents' => "",
      'other_documents' => "",
    ];
  }

  private function double_value($value) {
    $value = $value + 1;
    $doubleValue = $value <= 9 ? '0'.$value : $value;
    return $doubleValue;
  }

  private function check_duplicate($request) {
    $status = false;
    $duplicate = Application::where('locality_id', $request->locality_id)
                            ->where('sector_id', $request->sector_id)
                            ->where('block', $request->block)->get();

    foreach ($duplicate as $application) {
      // Added 'Yo' to prevent string position 0 from being returned as false
      $found = strpos('Yo '.$application->plot, $request->plot);
      if ($found >= 1) {
        $status = ['status' => true, 'application' => $application];
        break;
      }
    }

    return $status;
  }
}
