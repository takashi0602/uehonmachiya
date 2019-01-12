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
    $count = $money = 0;
    $ranks = Rank::select('user_id', 'money')->orderBy('money', 'desc')->get();
    foreach ($ranks as $rank) {
      if($rank->money == 0) {
        $data[] = [
          'rank' => ++$count,
          'user_name' => User::where('id', $rank->user_id)->first()->name,
          'money' => $rank->money
        ];
      } else if($money != $rank->money) {
        $data[] = [
          'rank' => ++$count,
          'user_name' => User::where('id', $rank->user_id)->first()->name,
          'money' => $rank->money
        ];
      } else {
        $data[] = [
          'rank' => $count,
          'user_name' => User::where('id', $rank->user_id)->first()->name,
          'money' => $rank->money
        ];
        $count++;
      }
      $money = $rank->money;
    }

    return view('admin.rank', [
      'data' => $data
    ]);
  }
}
