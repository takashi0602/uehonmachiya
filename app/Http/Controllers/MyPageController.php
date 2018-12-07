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

  public function edit()
  {
    return view('user.mypage.edit');
  }

  public function order()
  {
    $data = [];
    $product = null;
    $orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
    foreach ($orders as $order) {
      $product = Product::where('id', $order->product_id)->first();
      $data[] = [
        'id' => $product->id,
        'date' => $order->created_at->format('Y/m/d'),
        'amount' => $order->amount,
        'name' => $product->name,
        'author' => $product->author,
        'description' => $product->description,
        'price' => $product->sales_price,
        'total' => $product->sales_price * $order->amount
      ];
    }

    return view('user.mypage.order', [
      'data' => $data
    ]);
  }

  public function gift()
  {
    $point = User::select('point')->where('id', Auth::user()->id)->first();
    return view('user.mypage.gift', [
      'point' => $point->point
    ]);
  }

  public function add(Request $request)
  {
    dd($request->code);

    redirect('user.mypage.gift');
  }

}
