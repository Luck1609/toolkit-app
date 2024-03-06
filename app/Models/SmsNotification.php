<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ApiResponse;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class SmsNotification extends Model
{
  use HasFactory, HasUuids;

  protected $guarded = [];

  public function store_sms($contacts, $message, $details)
  {
    try {
      self::create([
        'contacts' => is_array($contacts) ? json_encode($contacts) : $contacts,
        'message'=> $message,
        'type' => $details['type'],
        'display_name' => $details['display_name'],
        'staff_id' => $details['staff_id'],
        'units_used' => (strlen($message) >= 160 ? ceil(strlen($message) / 153) : 1) * ($this->checkJson($contacts) ? count(json_decode($contacts)) : 1),
        'sent_date' => now(),
        'bulk' => is_array($contacts)
      ]);
    } catch (\Throwable $err) {
      return $this->errorResponse($err->getMessage());
    }
  }
}
