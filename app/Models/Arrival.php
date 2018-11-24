<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
  protected $fillable = [
    'arrival_id', 'product_id', 'supplier_id', 'amount', 'status'
  ];
}
