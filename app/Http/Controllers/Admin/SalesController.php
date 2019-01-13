<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;

class SalesController extends Controller
{
    public function index()
    {
        $data = [];
        $orders = Order::orderby('id', 'desc')->get();
        foreach ($orders as $order) {
          $product = Product::where('id', $order->product_id)->first();
          $data[] = [
            'created_at' => $order->created_at,
            'name' => $product->name,
            'amount' => $order->amount,
            'sales' => $product->sales_price * $order->amount
          ];
        }
        return view('admin.sales', [
          'data' => $data
        ]);

    }

}
