<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use App\Models\Product;



class StockController extends Controller
{
    public function index()
    {
        $products = [];
        $count = 0;
        $stocks = Stock::all();
        foreach ($stocks as $stock) {
            $products[] = Product::select('name')->where('id', $stock->product_id)->first();
        }
        return view('admin.stock', [
            'stocks' => $stocks,
            'products' => $products,
            'count' => $count
        ]);
    }
}


