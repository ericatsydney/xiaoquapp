<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
  protected $fillable = [
    'xiaoqu_id',
    'unit_number',
    'identity'
  ];
}
