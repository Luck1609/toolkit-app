<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TscMeeting extends Model
{
  use HasFactory;

  protected $table = 'tsc_meeting';
  protected $guarded = [];

  public function quarter()
  {
    return $this->belongsTo(Quarter::class);
  }
}
