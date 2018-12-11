<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ordering;
use App\Models\Product;
use App\Models\Supplier;

class OrderingController extends Controller
{
  public function index()
  {
    $ordering = Ordering::select("id","product_id",'supplier_id',"ordering_id",'amount','created_at','status')->get();
      $suppliers = [];
      $products = [];
      $count = 0;
      foreach ($ordering as $order) {
          $suppliers[] = Supplier::select('name')->where('id', $order->supplier_id)->first();
      }
      foreach ($ordering as $order)
      {
          $products[] = Product::select('name')->where('id', $order->product_id)->first();
      }
    return view('admin.ordering.index', [
      'ordering' => $ordering,
        'products' => $products,
        'suppliers' => $suppliers,
        'count' => $count
    ]);
  }
}
