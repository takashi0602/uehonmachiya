<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class TopController extends Controller
{
  public function index()
  {
    $categories = [];
    $count = 0;
    $products = Product::orderby('id', 'desc')->get();
    foreach ($products as $product) {
      $categories[] = Category::where('id', $product->category_id)->first();
    }
    return view('user.top', [
      'products' => $products,
      'categories' => $categories,
      'count' => $count
    ]);
  }
}
