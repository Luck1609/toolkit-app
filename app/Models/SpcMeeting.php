<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpcMeeting extends Model
{
  use HasFactory, HasUuids;

  protected $table = 'spc_meeting';
  protected $guarded = [];

  public function quarter()
  {
    return $this->belongsTo(Quarter::class);
  }
}
