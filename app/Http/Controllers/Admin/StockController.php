<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Supplier;

class StockController extends Controller
{
    public function index()
    {
    $data = [];
    $stocks = Stock::all();
    foreach ($stocks as $stock) {
        $data[] = [
          'id' => $stock->id,
          'product_id' => $stock->product_id,
          'name' => Product::where('id', $stock->product_id)->first()->name,
          'price' => Product::where('id', $stock->product_id)->first()->price,
          'supplier' => Supplier::where(
            'id', Product::where('id', $stock->product_id)->first()->supplier_id)->first()->name,
          'amount' => $stock->amount,
          'safety' => $stock->safety
        ];
    }
    return view('admin.stock', [
        'data' => $data
    ]);
}
}


