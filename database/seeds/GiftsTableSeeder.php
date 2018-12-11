<?php

use Illuminate\Database\Seeder;

class GiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $point = [
        '1000','1000','1000','1000','1000',
        '1500','1500','1500','1500','1500',
        '3000','3000','3000','3000','3000',
        '5000','5000','5000','5000','5000',
        '10000','10000','10000','10000','10000','10000',
      ];

      for($i = 0; $i < 25; $i++){
        DB::table('gifts')->insert([
          'code' => bin2hex(random_bytes(8)),
          'point' => $point[$i],
          'created_at' => new DateTime(),
          'updated_at' => new DateTime()
        ]);
      }
    }
}
