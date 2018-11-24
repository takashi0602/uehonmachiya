<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
  protected $fillable = [
    'shipment_id', 'product_id', 'user_id', 'amount', 'status'
  ];
}
