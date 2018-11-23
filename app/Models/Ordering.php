<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordering extends Model
{
  protected $fillable = [
    'ordering_id', 'product_id', 'supplier_id', 'amount', 'status'
  ];
}
