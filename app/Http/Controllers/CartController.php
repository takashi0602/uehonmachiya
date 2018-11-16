<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Auth;

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
    $carts_id = array();
    $amount = array();
    $products = array();
    $sales_price = array();
    $carts = Cart::where('user_id', Auth::user()->id)->get();
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
    $count = 0;
    return view('user.cart.index', [
      'products' => $products,
      'carts_id' => $carts_id,
      'amount' => $amount,
      'count' => $count,
      'sales_price' => $sales_price
    ]);
  }

  public function add(Request $request)
  {
    Cart::create([
      'product_id' => $request->product_id,
      'user_id' => Auth::user()->id,
      'amount' => $request->amount
    ]);
    return redirect('/cart');
  }

  public function delete(Request $request)
  {
    Cart::destroy($request->cart_id);
    return redirect('/cart');
  }
}
