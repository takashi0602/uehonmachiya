<?php

namespace App\Http\Controllers\Supplier;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\SupplierEditPost;
use Illuminate\Support\Facades\Hash;

class MyPageController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth.check.supplier');
    }

    public function index()
    {
      $supplier = Supplier::where('id', Auth::guard('supplier')->user()->id)->first();
      return view('supplier.mypage.index', [
        'supplier' => $supplier,
        'supplier_name' => Auth::guard('supplier')->user()->name
      ]);
    }

    public function edit()
    {
      $supplier = Supplier::where('id', Auth::guard('supplier')->user()->id)->first();
      return view('supplier.mypage.edit', [
        'supplier' => $supplier,
        'supplier_name' => Auth::guard('supplier')->user()->name
      ]);
    }

    public function post(SupplierEditPost $request)
    {
      Supplier::where('id', Auth::guard('supplier')->user()->id)->update([
        'name' => $request->name,
        'president' => $request->president,
        'postal' => $request->postal,
        'address' => $request->address,
        'tel' => $request->tel
      ]);
      if($request->password) {
        Supplier::where('id', Auth::guard('supplier')->user()->id)->update([
          'password' => Hash::make($request->password)
        ]);
      }
      $nowEmail = Supplier::where('id', Auth::guard('supplier')->user()->id)->first()->email;
      if($request->email != $nowEmail) {
        if(count(Supplier::where('email', $request->email)->get()) == 0) {
          Supplier::where('id', Auth::guard('supplier')->user()->id)->update([
            'email' => $request->email
          ]);
        }
      }
      return redirect('/supplier/mypage/edit');
    }
}
