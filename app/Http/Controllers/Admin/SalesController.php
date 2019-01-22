<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\Product;

class SalesController extends Controller
{
    public function index()
    {
        $data = [];
        $shipments = Shipment::orderby('id', 'desc')->paginate(20);
        foreach ($shipments as $shipment) {
          $product = Product::where('id', $shipment->product_id)->first();
          $data[] = [
            'created_at' => $shipment->created_at,
            'name' => $product->name,
            'amount' => $shipment->amount,
            'sales' => $product->sales_price * $shipment->amount
          ];
        }
        return view('admin.sales', [
          'data' => $data,
          'shipments' => $shipments
        ]);

    }

}
