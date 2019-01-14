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
        $data = [];
        // TODO: switch文から
        /*if($request->status) {
          $stocks = Stock::all();
          switch ($request->status) {
            case 1:
              foreach ($stocks as $stock) {
                if($stock->amount >= $stock->safety) {

                }
              }
              break;
            case 2:
              $stocks = Stock::where()->get();
              break;
            case 3:
              $stocks = Stock::where()->get();
              break;
            case 4:
              $stocks = Stock::where()->get();
              break;
            case 5:
              $stocks = Stock::where()->get();
              break;
            case 6:
              $stocks = Stock::where()->get();
              break;
            case 7:
              $stocks = Stock::all();
              break;
          }
        } else {
          $stocks = Stock::all();
        }*/
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
    return view('admin.stock', [
        'data' => $data
    ]);
}
}


