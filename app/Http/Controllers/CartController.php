<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Rank;
use Auth;
use Illuminate\Support\Collection;

class CartController extends Controller
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

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $carts_id = $amount = $products = $sales_price = [];
    $carts = Cart::where('user_id', Auth::user()->id)->get();
    $point = User::select('point')->where('id', Auth::user()->id)->first();
    foreach ($carts as $cart) {
      $carts_id[] = $cart->id;
      $amount[] = $cart->amount;
      $products[] = Product::where('id', $cart->product_id)->first();
    }
    if(!empty($products)) {
      $i = 0;
      foreach ($products as $product) {
        $sales_price[] = $product->sales_price * $amount[$i++];
      }
    }
    $total = array_sum($sales_price);
    $remaining_points = $point->point - $total;
    $count = 0;
    return view('user.cart.index', [
      'products' => $products,
      'carts_id' => $carts_id,
      'amount' => $amount,
      'count' => $count,
      'sales_price' => $sales_price,
      'point' => $point,
      'total' => $total,
      'remaining_points' => $remaining_points
    ]);
  }

  public function add(Request $request)
  {
    if($request->amount > 0) {
      Cart::create([
        'product_id' => $request->product_id,
        'user_id' => Auth::user()->id,
        'amount' => $request->amount
      ]);
    }

    return redirect('/cart');
  }

  public function delete(Request $request)
  {
    $user = Cart::select('user_id')->where('id', $request->cart_id)->first();

    if(is_object($user)) {
      if(intval($user->user_id) === Auth::user()->id) {
        Cart::destroy($request->cart_id);
      }
    }

    return redirect('/cart');
  }

  public function confirm()
  {
    $carts_id = $amount = $products = $sales_price = [];
    $carts = Cart::where('user_id', Auth::user()->id)->get();
    $point = User::select('point')->where('id', Auth::user()->id)->first();
    $user = User::select('name', 'postal', 'address')->where('id', Auth::user()->id)->first();
    foreach ($carts as $cart) {
      $carts_id[] = $cart->id;
      $amount[] = $cart->amount;
      $products[] = Product::where('id', $cart->product_id)->first();
    }
    if(!empty($products)) {
      $i = 0;
      foreach ($products as $product) {
        $sales_price[] = $product->sales_price * $amount[$i++];
      }
    }
    $total = array_sum($sales_price);
    $remaining_points = $point->point - $total;
    $count = 0;
    return view('user.cart.confirm', [
      'products' => $products,
      'carts_id' => $carts_id,
      'amount' => $amount,
      'count' => $count,
      'sales_price' => $sales_price,
      'point' => $point,
      'total' => $total,
      'remaining_points' => $remaining_points,
      'user' => $user
    ]);
  }

  public function finish()
  {
    $carts_id = $amount = $products = $sales_price = [];
    $carts = Cart::where('user_id', Auth::user()->id)->get();
    $point = User::select('point')->where('id', Auth::user()->id)->first();
    foreach ($carts as $cart) {
      $carts_id[] = $cart->id;
      $amount[] = $cart->amount;
      $products[] = Product::where('id', $cart->product_id)->first();
    }
    if(!empty($products)) {
      $i = 0;
      foreach ($products as $product) {
        $sales_price[] = $product->sales_price * $amount[$i++];
      }
    }
    $total = array_sum($sales_price);
    $remaining_points = $point->point - $total;
    $point->point = $remaining_points;
    User::where('id', Auth::user()->id)->update(['point' => $remaining_points]);

    $order_id = Order::select('order_id')->orderBy('created_at', 'desc')->first();

    if($order_id != null) {
      $id = $order_id->order_id + 1;
    } else {
      $id = 1;
    }
    $orders = Cart::where('user_id', Auth::user()->id)->get();

    foreach ($orders as $order) {
      Order::create([
        'order_id' => $id,
        'user_id' => Auth::user()->id,
        'product_id' => $order->product_id,
        'amount' => $order->amount
      ]);
    }

    $rank_total = Rank::where('user_id', Auth::user()->id)->first();
    if($rank_total) {
      Rank::where('user_id', Auth::user()->id)->update([
        'money' => $total + $rank_total->money
      ]);
    } else {
      Rank::create([
        'user_id' => Auth::user()->id,
        'money' => $total
      ]);
    }

    Cart::where('user_id', Auth::user()->id)->delete();

    return redirect('/decision');
  }

  public function decision()
  {
    return view('user.cart.decision');
  }
}
