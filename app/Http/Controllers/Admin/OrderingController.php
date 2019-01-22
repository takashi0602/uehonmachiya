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
      $orderings = Ordering::paginate(20);
      $data = [];
      foreach ($orderings as $ordering) {
          $supplier = Supplier::where('id', $ordering->supplier_id)->first();
          $product = Product::where('id', $ordering->product_id)->first();
          $data[] = [
              'id' => $ordering->id,
              'product_name' => $product->name,
              'isbn' => $product->isbn,
              'price' => $product->price,
              'amount' => $ordering->amount,
              'supplier_name' => $supplier->name,
              'postal' => $supplier->postal,
              'address' => $supplier->address,
              'status' => $ordering->status,
              'created_at' => $ordering->created_at
          ];
      }
      return view('admin.ordering.index', [
          'data' => $data,
          'orderings' => $orderings
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
