<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
  protected $fillable = [
    'code', 'point', 'use_flag'
  ];
}
