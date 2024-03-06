<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
  use HasFactory, HasUuids;

  protected $table = 'quarter';
  protected $guarded = [];
  protected $with = ['tsc', 'spc'];

  // Relationships
  public function applications()
  {
    return $this->hasMany(Application::class);
  }

  public function spc()
  {
    return $this->hasOne(SpcMeeting::class);
  }

  public function tsc()
  {
    return $this->hasOne(TscMeeting::class);
  }



  public function get_quarter_applications_stats($quarter)
  {
    return [
      'total' => $quarter->applications->count(),
      'approved' => $quarter->applications()->where('approved', true)->get(),
      'deferred' => $quarter->applications()->where('deferred', true)->get(),
    ];
  }

  public function get_quarter_meetings($quarter)
  {
    return [
      'spc' => $quarter->spc,
      'tsc' => $quarter->tsc
    ];
  }
}
