<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
  public function index()
  {
      $suppliers = Supplier::select("name","postal","tel","email","president")->get();
    return view('admin.supplier.index', [
      'suppliers' => $suppliers
    ]);
  }
}
