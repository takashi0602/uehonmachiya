<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use App\Models\Ordering;
use App\Models\Product;
use App\Models\Arrival;

class OrderingController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth.check.supplier');
    }

    public function index()
    {
      $data = [];
      $orderings = Ordering::where('supplier_id', Auth::guard('supplier')->user()->id)
        ->orderby('id', 'desc')->get();
      foreach ($orderings as $ordering) {
        $data[] = [
          'ordering_id' => $ordering->id,
          'product_id' => $ordering->product_id, // TODO: ISBN
          'product_name' => Product::where('id', $ordering->product_id)->first()->name,
          'amount' => $ordering->amount,
          'admin_company_name' => env('USER_COMPANY_NAME'),
          'admin_email' => env('USER_EMAIL'),
          'admin_postal' => env('USER_POSTAL'),
          'admin_address' => env('USER_ADDRESS'),
          'status' => $ordering->status,
          'created_at' => $ordering->created_at,
        ];
      }
      return view('supplier.ordering.index', [
        'data' => $data,
        'supplier_name' => Auth::guard('supplier')->user()->name
      ]);
    }

    public function shipment(Request $request)
    {
      $ordering = Ordering::where('id', $request->ordering_id)->first();
      $arrival_id = Arrival::orderby('arrival_id', 'desc')->first()->arrival_id;
      Arrival::create([
        'arrival_id' => $arrival_id + 1,
        'product_id' => $ordering->product_id,
        'supplier_id' => $ordering->supplier_id,
        'amount' => $ordering->amount,
        'status' => $ordering->status
      ]);
      Ordering::destroy($request->ordering_id);
      return redirect('/supplier/shipped');
    }
}
