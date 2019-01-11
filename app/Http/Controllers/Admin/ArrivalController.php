<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arrival;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Stock;

class ArrivalController extends Controller
{
  public function index()
  {
      $suppliers = [];
      $products = [];
      $count = 0;
      $arrivals = Arrival::select("id","supplier_id","product_id","arrival_id","amount","created_at","status")->get();
      foreach ($arrivals as $arrival) {
          $products[] = Product::select('name')->where('id', $arrival->product_id)->first();
      }
      foreach ($arrivals as $arrival) {
          $suppliers[] = Supplier::select('name')->where('id', $arrival->supplier_id)->first();
      }
    return view('admin.arrival.index', [
      'arrivals' => $arrivals,
        'products' => $products,
        'suppliers' => $suppliers,
        'count' => $count,
    ]);
  }

  public function processing(Request $request)
  {
    $product_id = Arrival::where('id', $request->id)->first()->product_id;
    $amount = Stock::where('product_id', $product_id)->first()->amount + Arrival::where('id', $request->id)->first()->amount;
    Arrival::where('id', $request->id)->update([
      'status' => 1
    ]);
    Stock::where('product_id', $product_id)->update([
      'amount' => $amount
    ]);
    return redirect('/admin/arrival');
  }
}
