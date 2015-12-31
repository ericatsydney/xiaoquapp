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

  /**
   * Resident belong to one xiaoqu.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function xiaoqu()
  {
    return $this->belongsTo('App\Xiaoqu');
  }

  /**
   * Resident could have upto 4 users.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function users()
  {
    return $this->hasMany('App\User');
  }
}
