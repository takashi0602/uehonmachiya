<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Auth;

class MyPageController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $user = User::select('name', 'postal', 'address', 'email', 'tel', 'point')
      ->where('id', Auth::user()->id)->first();
    return view('user.mypage.index', [
      'user' => $user
    ]);
  }

  public function order()
  {
    $products = [];
    $orders = Order::where('user_id', Auth::user()->id)->get();
    $status = Order::select('status')->where('user_id', Auth::user()->id)->get();
    foreach ($orders as $order) {
      $products[] = Product::select('sales_price')->where('id', $order->product_id)->first();
    }
    dd($status);
    return view('user.mypage.order', [
      'orders' => $orders,
      'products' => $products
    ]);
  }
}
