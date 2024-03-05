<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Staff extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable, HasRoles;

  protected $table = 'staff';
  protected $guarded = [];
  protected $with = ['unreadNotifications'];


  // protected $fillable = [
  //   'name',
  //   'email',
  //   'phone',
  //   'password',
  // ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'email_verified_at' => 'datetime',
  ];

  // Relationships
  public function data ()
  {
    return $this->hasMany(\App\Models\Application::class);
  }


  public function office()
  {
    return $this->belongsTo(\App\Models\Office::class);
  }


  public function role ()
  {
    return $this->hasOne(\App\Models\Role::class);
  }

}

