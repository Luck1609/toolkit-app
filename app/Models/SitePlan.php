<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitePlan extends Model
{
  use HasFactory;

  // protected $with = ;
  protected $guarded = [];

  // protected $fillable = [
  //   'name',
  //   'contact',
  //   'locality_id',
  //   'sector_id',
  //   'locality_name',
  //   'sector_name',
  //   'staff_id',
  //   'block',
  //   'plot',
  //   'issued_on'
  // ];



  public function locality()
  {
    return $this->belongsTo('App\Models\Locality');
  }


  public function sector()
  {
    return $this->belongsTo('App\Models\Sector');
  }
}
