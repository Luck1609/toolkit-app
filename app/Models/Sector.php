<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
  use HasFactory, HasUuids;

  protected $guarded = [];

  // protected $fillable = [
  //     'name',
  //     'initials',
  //     'blocks',
  //     'locality_id'
  // ];



  // Relationships
  public function locality()
  {
    return $this->belongsTo(Locality::class);
  }


  public function applications()
  {
    return $this->hasMany(Application::class);
  }

}
