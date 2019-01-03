<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $money = [
            500, 2000, 1800, 3200, 7500,
            3360, 3920, 3520, 5580, 3000,
            7370, 7200, 19500, 16800, 18000,
            19200, 20400, 21600, 22800, 24000,
            25200, 26400, 27600, 28800, 8250,
            10660, 11070, 15120, 13340, 13800,
        ];

        for ($i = 0; $i < 30; $i++) {
            DB::table('ranks')->insert([
                'money' => $money[$i],
                'user_id' => $i+1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}
