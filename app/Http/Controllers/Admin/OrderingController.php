<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ordering;

class OrderingController extends Controller
{
  public function index()
  {
    $ordering = Ordering::all();
    return view('admin.order.index', [
      'ordering' => $ordering
    ]);
  }
}
