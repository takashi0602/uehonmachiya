<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipment;

class ShipmentController extends Controller
{
  public function index()
  {
    $shipments = Shipment::select('shipment_id','product_id','amount','status');

    return view('admin.shipment.index', [
      'shipments' => $shipments
    ]);
  }
}
