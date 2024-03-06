<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
  use HasFactory, HasUuids;

  public function region() {
    return $this->belongsTo(Region::class, 'region_id');
  }
}
