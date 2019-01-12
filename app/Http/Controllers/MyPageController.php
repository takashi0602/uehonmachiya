<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Gift;
use App\Http\Requests\UserEdit;
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
    $user = User::select('name', 'kana', 'sex', 'postal', 'address', 'tel', 'birth')
      ->where('id', Auth::user()->id)->first();
    return view('user.mypage.edit', [
      'user' => $user
    ]);
  }

  public function post(UserEdit $request)
  {
    User::where('id', Auth::user()->id)->update([
        'name' => $request->name,
        'kana' => $request->kana,
        'sex' => $request->sex,
        'postal' => $request->postal,
        'address' => $request->address,
        'tel' => $request->tel,
        'birth' => $request->birth
      ]);
    return redirect('/mypage/edit');
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
        'total' => $product->sales_price * $order->amount,
        'status' => $order->status
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
    $point = Gift::select('point')->where('code', $request->code)->first();
    $havePoint = User::select('point')->where('id', Auth::user()->id)->first()->point;
    $flag = Gift::select('use_flag')->where('code', $request->code)->first();

    if($point && $flag->use_flag === 0) {
      User::where('id', Auth::user()->id)
        ->update([
          'point' => $point->point + $havePoint
        ]);
      Gift::where('code', $request->code)
        ->update([
          'use_flag' => 1
        ]);
    }

    return redirect('/mypage/gift');
  }

}
