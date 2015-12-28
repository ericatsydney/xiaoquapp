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
}
