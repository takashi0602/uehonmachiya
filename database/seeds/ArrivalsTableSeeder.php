<?php

use Illuminate\Database\Seeder;
use App\Models\Arrivals;
class ArrivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_id = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30
        ];
        $suppliers_id = [
            1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3
        ];
        $arrival_id = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30
        ];
        $amount = [
            5, 3, 8, 2, 10, 1, 4, 9, 5, 10, 15, 12, 15, 20, 3, 14, 18, 9, 10, 21, 7, 4, 5, 9, 7, 1, 2, 5, 9, 3
        ];
        $status = [
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
        ];
        for ($i = 0; $i < 30; $i++) {
            DB::table('arrivals')->insert([
                'product_id' => $product_id[$i],
                'supplier_id' => $suppliers_id[$i],
                'arrival_id' => $arrival_id[$i],
                'amount' => $amount[$i],
                'status' => $status[$i],
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}
