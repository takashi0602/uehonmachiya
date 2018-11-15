<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
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
    $carts = Cart::select('*')->where('user_id', Auth::user()->id)->get();
    return view('user.cart.index', [
      'carts' => $carts
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
}
