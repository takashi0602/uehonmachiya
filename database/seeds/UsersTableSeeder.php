<?php

use Illuminate\Database\Seeder;

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
        '山田太郎', '田中緑', '小林達也'
      ];

      $kana = [
        'ヤマダタロウ', 'タナカミドリ', 'コバヤシタツヤ'
      ];

      $email = [
        'u_test1@gmail.com', 'u_test2@gmail.com', 'u_test3@gmail.com'
      ];

      $password = [
        'password', 'password', 'password'
      ];

      $sex = [
        0, 1, 0
      ];

      $postal = [
        '1010101', '2020202', '3030303'
      ];

      $address = [
        '大阪府大阪市上本町6-1-1', '大阪府大阪市上本町6-1-2', '大阪府大阪市上本町6-1-3'
      ];

      $tel = [
        '01234567890', '01234567890', '01234567890'
      ];

      $birth = [
        '1991/01/01', '1992/02/02', '1993/03/03'
      ];

      $point = [
        1000, 3000, 500
      ];

      for($i = 0; $i < 3; $i++){
        DB::table('users')->insert([
          'name' => $name[$i],
          'kana' => $kana[$i],
          'email' => $email[$i],
          'password' => $password[$i],
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
