<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categorise_id', 'suppliers_id', 'name', 'author', 'img', 'description', 'company', 'price', 'sales_price'
    ];
}
