<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use function foo\func;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class CustomerController extends Controller
{
  public function index()
  {
    $customers = User::select("id","name","postal","address","email","email","birth","tel","sex","created_at")->get();

    foreach ($customers as $customer) {
      $customer["birth"] = Carbon::parse($customer->birth)->format("Y/m/d");
    }

    return view('admin.customer', [
      'customers' => $customers
    ]);
  }

}
