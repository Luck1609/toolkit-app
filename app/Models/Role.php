<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationships
    // public function permission()
    // {
    //   return $this->hasOne('App\Models\QuarterlyData');
    // }
}