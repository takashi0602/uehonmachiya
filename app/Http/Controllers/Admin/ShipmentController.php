<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\Product;
use App\Models\User;

class ShipmentController extends Controller
{
  public function index()
  {
    $data = $product_id = $product_name = $product = $status = [];
    $shipments = Shipment::select('id', 'shipment_id', 'user_id', 'product_id', 'amount', 'status', 'created_at')->get();
    $shipments_id = Shipment::distinct()->select('shipment_id', 'user_id', 'created_at', 'status')->get();

    foreach ($shipments as $shipment) {
      $product_id[] = [
        'shipment_id' => $shipment->shipment_id,
        'product_name' => Product::where('id', $shipment->product_id)->first()->name,
        'amount' => $shipment->amount,
        'sales' => Product::where('id', $shipment->product_id)->first()->sales_price * $shipment->amount,
      ];
    }

    foreach($product_id as $p) {
      $product[] = $product_name[$p['shipment_id'] - 1] = ['name' => [], 'amount' => [], 'sales' => []];
      array_push($product[$p['shipment_id'] - 1]['name'], $p['product_name']);
      array_push($product[$p['shipment_id'] - 1]['amount'], $p['amount']);
      array_push($product[$p['shipment_id'] - 1]['sales'], $p['sales']);
    }

    foreach ($shipments_id as $shipment_id) {
      $data[] = [
        'id' => $shipment_id->shipment_id,
        'user_name' => User::where('id', $shipment_id->user_id)->first()->name,
        'postal' => User::where('id', $shipment_id->user_id)->first()->postal,
        'address' => User::where('id', $shipment_id->user_id)->first()->address,
        'product_name' => $product[$shipment_id->shipment_id - 1]['name'],
        'amount' => $product[$shipment_id->shipment_id - 1]['amount'],
        'sales' => $product[$shipment_id->shipment_id - 1]['sales'],
        'created_at' => $shipment_id->created_at->format('Y/m/d'),
        'status' => $shipment_id->status
      ];
    }
    return view('admin.shipment.index', [
      'data' => $data
    ]);
  }
}
