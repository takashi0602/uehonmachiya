<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SupplierCreatePost;

class SupplierController extends Controller
{
  public function index()
  {
    $suppliers = Supplier::select("id", "name", "postal", "address", "tel", "email", "president")->paginate(20);
    return view('admin.supplier.index', [
      'suppliers' => $suppliers
    ]);
  }

  public function add()
  {
    return view('admin.supplier.add');
  }

  public function create(SupplierCreatePost $request)
  {
    Supplier::create([
      'name' => $request->name,
      'president' => $request->president,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'postal' => $request->postal,
      'address' => $request->address,
      'tel' => $request->tel
    ]);
    return redirect('/admin/supplier');
  }
}
