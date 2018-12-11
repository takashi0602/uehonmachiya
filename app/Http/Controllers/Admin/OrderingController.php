<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ordering;

class OrderingController extends Controller
{
  public function index()
  {
    $ordering = Ordering::select("id","ordering_id","product_id");

    return view('admin.order.index', [
      'ordering' => $ordering
    ]);
  }
}
