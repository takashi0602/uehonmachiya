<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Arrival;
use App\Models\Product;

class ShippedController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth.check.supplier');
    }

    public function index()
    {
      $data = [];
      $arrivals = Arrival::where('supplier_id', Auth::guard('supplier')->user()->id)
        ->orderby('id', 'desc')->get();
      foreach ($arrivals as $arrival) {
        $data[] = [
          'shipped_id' => $arrival->id,
          'product_id' => $arrival->product_id, // TODO: ISBN
          'product_name' => Product::where('id', $arrival->product_id)->first()->name,
          'amount' => $arrival->amount,
          'admin_company_name' => env('USER_COMPANY_NAME'),
          'admin_email' => env('USER_EMAIL'),
          'admin_postal' => env('USER_POSTAL'),
          'admin_address' => env('USER_ADDRESS'),
          'status' => $arrival->status,
          'created_at' => $arrival->created_at,
        ];
      }
      return view('supplier.shipped.index', [
        'data' => $data,
        'supplier_name' => Auth::guard('supplier')->user()->name
      ]);
    }
}
