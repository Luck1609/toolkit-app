<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  use HasFactory, HasUuids;

  // protected $with = ['towns'];

  public function towns() {
    return $this->hasMany(Town::class, 'region_id');
  }
}
