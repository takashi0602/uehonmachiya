<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rank;
use App\Models\User;

class RankController extends Controller
{
  public function index()
  {
    $data = [];
    $count = 1;
    $ranks = Rank::select('user_id', 'money')->orderBy('money', 'desc')->get();
    foreach ($ranks as $rank) {
      $data[] = [
        'user_name' => User::where('id', $rank->user_id)->first()->name,
        'money' => $rank->money
      ];
    }

    return view('admin.rank', [
      'data' => $data,
      'count' => $count
    ]);
  }
}
