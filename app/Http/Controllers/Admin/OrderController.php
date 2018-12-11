<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
  public function index()
  {
    $orders = Order::select("id","orderday","company")->get();
    return view('admin.order.index', [
      'orders' => $orders
    ]);
  }
}
