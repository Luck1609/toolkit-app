<?php

namespace App\Http\Requests\Settings;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiResponse;

class UpdateSettingsRequest extends FormRequest
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

  public function non_object_processing($request, $settings)
  {
    $options = '';
    $value = '';
    $array = $this->checkJson($settings->options) ? json_decode($settings->options) : null;

    try {
      if ($request->has('options') && !empty($request->options)) {
        if ($request->options === 'true') $value = true;
        else $value = $request->options === 'false' ? false : $request->options;

        $options = [
          'label' => $request->option,
          'value' => $value
        ];
      }
      else $options = $request->option;

      if ($array) $settings->update(['options' => json_encode([...$array, $options])]);
      else $settings->update(['options' => gettype($options) === 'array' ? json_encode([$options]) : $options]);
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }
  }

  public function object_processing($request, $settings)
  {
    $options = $this->checkJson($settings->options)
      ? json_decode($settings->options)
      : null;

    try {
      if ($request->has('field_id')) {
        $options = $this->process_deeply_nested_value($request, $options);
      }
      elseif ($request->has('id')) {
        $options = $this->process_nested_value($request, $options);
      }
// return $options;
      $settings->update(['options' => json_encode($options)]);
    } catch (\Throwable $err) {
    return $err;
      return $this->errorResponse($err->getMessage());
    }
  }


  protected function process_deeply_nested_value($request, $options)
  {
    if ($request->has('action') && $request->action === 'delete') {
      $filter_options = $options[$request->id]->value;

      $data = gettype($filter_options) === 'object' ? [$filter_options] : $filter_options;

      $options[$request->id]->value = $this->filter_values($data, $request->field_id);
      return $options;
    }
    else {
      return [
        ...$options,
        $request->id => [
          'label' => $options[$request->id]->label,
          'value' => [
            ...$options[$request->id]->value,
            $request->field_id => [
              'label' => $request->field_name ?? $options[$request->id]->value[$request->field_id]->label,
              'value' => $request->option ?? $options[$request->id]->value[$request->field_id]->value
            ]
          ]
        ]
      ];
    }
  }


  protected function process_nested_value($request, $options)
  {
    if ($request->has('action') && $request->action === 'delete') {
      $options = $this->filter_values($options, $request->id);
      return $options;
    }
    else {
      return  [
        ...$options,
        $request->id => [
          'label' => $request->field_name ?? $options[$request->id]->label,
          'value' => $request->has('options') && !empty($request->options) ? [
            $options[$request->id]->value,
            ['label' => $request->option, 'value' => $request->options]
          ] :
          $request->option ?? $options[$request->id]->value
        ]
      ];
    }
  }


  protected function filter_values($options, $id)
  {
    // return $options;
    $options = array_filter($options, function($key) use ($id) {
      return $key !== $id;
    }, 2);

    return array_values($options);
  }
}
