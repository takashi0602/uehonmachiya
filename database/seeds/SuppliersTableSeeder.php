<?php

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Illuminate\Support\Facades\Hash;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
          '山田社', '田中社', '松田社'
        ];

        $president = [
          '山田優', '田中宏', '松田美優紀'
        ];

        $email = [
          'test1@gmail.com', 'test2@gmail.com', 'test3@gmail.com'
        ];

        $password = [
          'password', 'password', 'password'
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

        for($i = 0; $i < 3; $i++){
          DB::table('suppliers')->insert([
            'name' => $name[$i],
            'president' => $president[$i],
            'email' => $email[$i],
            'password' => Hash::make($password[$i]),
            'postal' => $postal[$i],
            'address' => $address[$i],
            'tel' => $tel[$i],
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
          ]);
        }
    }
}
