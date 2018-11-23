<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;


class StockController extends Controller
{
  public function index()
  {
    $stocks = Stock::all();
    return view('admin.stock', [
      'stocks' => $stocks
    ]);
  }
}
