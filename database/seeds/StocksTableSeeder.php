<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product_id = [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
        21, 22, 23, 24, 25, 26, 27, 28, 29, 30
      ];

      {
        $amount = [
          0, 10, 60, 60, 30, 15, 20, 20,
          10, 0, 60, 20, 60,
          30, 50, 20,
          60, 0, 60,
          30, 50, 40,
          50, 40, 20, 0,
          50, 0, 30, 10
        ];

        $safety = [
          20, 20, 20, 20, 20, 40, 40, 40,
          40, 20, 20, 20, 20,
          30, 30, 30,
          30, 30, 30,
          30, 30, 30,
          30, 30, 40, 40,
          40, 40, 40, 40
        ];

        for ($i = 0; $i < 30; $i++) {
          DB::table('stocks')->insert([
            'product_id' => $product_id[$i],
            'amount' => $amount[$i],
            'safety' => $safety[$i],
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
          ]);
        }
      }
    }
}
