<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arrival;

class ArrivalController extends Controller
{
  public function index()
  {
    $arrivals = Arrival::all();
    return view('admin.arrival.index', [
      'arrivals' => $arrivals
    ]);
  }
}
