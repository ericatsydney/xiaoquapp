<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xiaoqu extends Model
{
  protected $fillable = [
    'title',
    'province',
    'city',
    'address',
    'lat',
    'lng'
  ];

  /**
   * Each xiaoqu could have many residents.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function residents()
  {
    return $this->hasMany('App\Resident');
  }
}
