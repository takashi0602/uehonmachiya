<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use App\Models\Ordering;
use App\Models\Product;

class OrderingController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth.check.supplier');
    }

    public function index()
    {
      $count = 1;
      $data = [];
      $orderings = Ordering::where('supplier_id', Auth::guard('supplier')->user()->id)->get();
      foreach ($orderings as $ordering) {
        $data[] = [
          'id' => $count++,
          'ordering_id' => $ordering->id,
          'product_id' => $ordering->product_id,
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
        'data' => $data
      ]);
    }
}
