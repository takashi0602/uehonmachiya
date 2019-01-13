<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gift;

class GiftController extends Controller
{
    public function index()
    {
      $gifts = Gift::all();
      return view('admin.gift', [
        'gifts' => $gifts
      ]);
    }

    public function create(Request $request)
    {
      if($request->point > 0) {
        for($i = 0; $i < $request->amount; $i++) {
          Gift::create([
            'code' => bin2hex(random_bytes(8)),
            'point' => $request->point
          ]);
        }
      }
      return redirect('/admin/gift');
    }
}
