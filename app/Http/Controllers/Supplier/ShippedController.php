<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShippedController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth.check.supplier');
    }

    public function index()
    {
      return view('supplier.shipped.index');
    }
}
