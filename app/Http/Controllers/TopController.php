<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TopController extends Controller
{
  public function index()
  {
    $products = Product::select('*')->get();
    return view('user.top', [
      'products' => $products
    ]);
  }
}
