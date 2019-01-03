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
    // 修正
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

  public function process()
  {
    return view('admin.ordering.process');
  }

  public function create(Request $request)
  {
    if($request->amount > 0) {
      Ordering::create([
        'ordering_id' =>
          Ordering::orderBy('ordering_id', 'desc')->first()->ordering_id
            ? Ordering::orderBy('ordering_id', 'desc')->first()->ordering_id + 1 : 1,
        'product_id' => $request->product_id,
        'supplier_id' => Product::where('id', $request->product_id)->first()->supplier_id,
        'amount' => $request->amount,
        'status' => 0
      ]);
    }
    return redirect('/admin/ordering');
  }
}
