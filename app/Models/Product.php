<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'categorise_id', 'suppliers_id', 'name', 'author', 'img', 'description', 'company', 'price', 'sales_price'
    ];
}
