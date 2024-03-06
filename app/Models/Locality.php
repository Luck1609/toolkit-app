<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory, HasUuids;

    protected $with = ['sectors'];
    protected $guarded = [];


    // protected $fillable = [
    //   'name',
    //   'initials',
    //   'office_id'
    // ];



    // Relationships
    public function sectors()
    {
      return $this->hasMany('App\Models\Sector');
    }


    public function site_plans()
    {
      return $this->hasMany('App\Models\SitePlan');
    }


    public function office()
    {
      return $this->belongsTo('App\Models\Sector');
    }
}
