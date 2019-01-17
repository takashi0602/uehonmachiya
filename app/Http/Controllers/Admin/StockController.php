<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Supplier;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $data = $box = [];
        if($request->status) {
            $stocks = Stock::all();
            switch ($request->status) {
                case 1:
                    foreach ($stocks as $stock) {
                        if($stock->amount >= $stock->safety) {
                            $box[] = $stock;
                        }
                    }
                    break;
                case 2:
                    foreach ($stocks as $stock) {
                        if($stock->safety - $stock->amount > 0 && $stock->safety - $stock->amount < $stock->safety) {
                            $box[] = $stock;
                        }
                    }
                    break;
                case 3:
                    foreach ($stocks as $stock) {
                        if($stock->amount ==  0) {
                            $box[] = $stock;
                        }
                    }
                    break;
                case 4:
                    foreach ($stocks as $stock) {
                        if($stock->amount > 0) {
                            $box[] = $stock;
                        }
                    }
                    break;
                case 5:
                    foreach ($stocks as $stock) {
                        if($stock->amount < $stock->safety) {
                            $box[] = $stock;
                        }
                    }
                    break;
                case 6:
                    foreach ($stocks as $stock) {
                        if($stock->amount >= $stock->safety || $stock->amount == 0) {
                            $box[] = $stock;
                        }
                    }
                    break;
                case 7:
                    $box = Stock::all();
                    break;
            }
            foreach ($box as $b) {
                $product = Product::where('id', $b->product_id)->first();
                $data[] = [
                    'id' => $b->id,
                    'product_id' => $b->product_id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'supplier' => Supplier::where('id', $product->supplier_id)->first()->name,
                    'amount' => $b->amount,
                    'safety' => $b->safety
                ];
            }
        } else {
            $stocks = Stock::all();
            foreach ($stocks as $stock) {
                $product = Product::where('id', $stock->product_id)->first();
                $data[] = [
                    'id' => $stock->id,
                    'product_id' => $stock->product_id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'supplier' => Supplier::where('id', $product->supplier_id)->first()->name,
                    'amount' => $stock->amount,
                    'safety' => $stock->safety
                ];
            }
        }
        return view('admin.stock', [
            'data' => $data
        ]);
    }
}


