<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeferredRecords extends Model
{
  use HasFactory;


  // protected $with = ['quarter'];
  protected $guarded = [];


  // protected $fillable = [
  //   'approved',
  //   'deferred',
  //   'recommended',
  //   'decision',
  //   'application_id',
  //   'quarter_id'
  // ];

  // Relationships
  public function applications()
  {
    return $this->belongsTo(\App\Models\Application::class);
  }
}
