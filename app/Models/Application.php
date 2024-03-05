<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  use HasFactory;

  protected $with = ['locality', 'sector'];
  protected $guarded = [];

  // Relationships
  public function deferred()
  {
    return $this->hasMany(DeferredRecords::class);
  }


  public function quarter()
  {
    return $this->belongsTo(Quarter::class);
  }

  public function locality()
  {
    return $this->belongsTo(Locality::class);
  }

  public function sector()
  {
    return $this->belongsTo(Sector::class);
  }
}
