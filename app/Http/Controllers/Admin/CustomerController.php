<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
  public function index()
  {
    $customers = User::select("name","postal","address","email","email","birth","tel","sex")->get();;
    dd($customers);
    return view('admin.customer', [
      'customers' => $customers
    ]);
  }

}
