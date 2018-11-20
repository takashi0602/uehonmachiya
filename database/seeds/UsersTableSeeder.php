<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $name = [
        '山田太郎', '田中緑', '小林達也', '高橋愛美'
      ];

      $kana = [
        'ヤマダタロウ', 'タナカミドリ', 'コバヤシタツヤ', 'タカハシマナミ'
      ];

      $email = [
        'u_test1@gmail.com', 'u_test2@gmail.com', 'u_test3@gmail.com', 'u_test4@gmail.com'
      ];

      $password = [
        'password', 'password', 'password', 'password'
      ];
      // 0=男 1=女
      $sex = [
        0, 1, 0, 1
      ];

      $postal = [
        '1010101', '2020202', '3030303', '4040404'
      ];

      $address = [
        '大阪府大阪市上本町6-1-1', '大阪府大阪市上本町6-1-2', '大阪府大阪市上本町6-1-3', '大阪府大阪市上本町6-1-4',
      ];

      $tel = [
        '01234567890', '01234567890', '01234567890', '01234567890'
      ];

      $birth = [
        '1991/01/01', '1992/02/02', '1993/03/03', '1993/04/04'
      ];

      $point = [
        1000, 3000, 500, 600
      ];

      for($i = 0; $i < 4; $i++){
        DB::table('users')->insert([
          'name' => $name[$i],
          'kana' => $kana[$i],
          'email' => $email[$i],
          'password' => Hash::make($password[$i]),
          'sex' => $sex[$i],
          'postal' => $postal[$i],
          'address' => $address[$i],
          'tel' => $tel[$i],
          'birth' => $birth[$i],
          'point' => $point[$i],
          'created_at' => new DateTime(),
          'updated_at' => new DateTime()
        ]);
      }
    }
}
