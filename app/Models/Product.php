<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'supplier_id', 'isbn', 'name', 'author', 'img', 'description', 'company', 'price', 'sales_price'
    ];
}
