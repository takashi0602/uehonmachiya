<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Shipment;

class OrderController extends Controller
{

  public function index()
  {
    $data = $product_id = $product_name = $product = $status = [];
    $orders = Order::select('id', 'order_id', 'user_id', 'product_id', 'amount', 'status', 'created_at')->get();
    $orders_id = Order::distinct()->select('order_id', 'user_id', 'created_at', 'status')->get();

    foreach ($orders as $order) {
      $product_id[] = [
        'order_id' => $order->order_id,
        'product_name' => Product::where('id', $order->product_id)->first()->name,
        'amount' => $order->amount,
        'stock' => Stock::where('product_id', $order->product_id)->first()->amount,
        'sales' => Product::where('id', $order->product_id)->first()->sales_price * $order->amount,
      ];
    }

    foreach($product_id as $p) {
      $product[] = $product_name[$p['order_id'] - 1] = ['name' => [], 'amount' => [], 'stock' => [], 'sales' => []];
      array_push($product[$p['order_id'] - 1]['name'], $p['product_name']);
      array_push($product[$p['order_id'] - 1]['amount'], $p['amount']);
      array_push($product[$p['order_id'] - 1]['stock'], $p['stock']);
      array_push($product[$p['order_id'] - 1]['sales'], $p['sales']);
    }

    foreach ($orders_id as $order_id) {
      $data[] = [
        'id' => $order_id->order_id,
        'user_name' => User::where('id', $order_id->user_id)->first()->name,
        'postal' => User::where('id', $order_id->user_id)->first()->postal,
        'address' => User::where('id', $order_id->user_id)->first()->address,
        'product_name' => $product[$order_id->order_id - 1]['name'],
        'amount' => $product[$order_id->order_id - 1]['amount'],
        'stock' => $product[$order_id->order_id - 1]['stock'],
        'sales' => $product[$order_id->order_id - 1]['sales'],
        'created_at' => $order_id->created_at->format('Y/m/d'),
        'status' => $order_id->status,
        'count' => 0
      ];
    }

    return view('admin.order.index', [
      'data' => $data
    ]);
  }

  public function shipment(Request $request)
  {
    Order::where('order_id', $request->order_id)->update(['status' => 1]);

    $amount = Order::where('order_id', $request->order_id)->get();

    foreach ($amount as $value) {
      Stock::where('product_id', $value->product_id)->update([
        'amount' => Stock::where('product_id', $value->product_id)->first()->amount - $value->amount
      ]);
    }

    $shipments = Order::where('order_id', $request->order_id)->get();
    $shipment_id = Shipment::select('shipment_id')->orderBy('shipment_id', 'desc')->first();

    if($shipment_id) {
      $id = $shipment_id->shipment_id + 1;
    } else {
      $id = 1;
    }

    foreach ($shipments as $shipment) {
      Shipment::create([
        'shipment_id' => $id,
        'product_id' => $shipment->product_id,
        'user_id' => $shipment->user_id,
        'amount' => $shipment->amount,
        'status' => 0
      ]);
    }
    return redirect('/admin/order');
  }
}
