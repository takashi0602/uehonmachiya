<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arrival;
use App\Models\Product;

class ArrivalController extends Controller
{
  public function index()
  {

      $products = [];
      $count = 0;
      $arrivals = Arrival::select("product_id","arrival_id","code")->get();
      foreach ($arrivals as $arrival) {
          $products[] = Product::select('id')->where('id', $arrival->product_id)->first();
      }
    return view('admin.arrival.index', [
      'arrivals' => $arrivals,
        'products' => $products,
        'count' => $count,
    ]);
  }
}
