<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{

  public function index()
  {
    $orders = Order::select("id","order_id","user_id",'product_id','amount','status','created_at')->get();

    return view('admin.order.index', [
      'orders' => $orders
    ]);
  }
}
