<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arrival;
use App\Models\Product;
use App\Models\Supplier;
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
}
