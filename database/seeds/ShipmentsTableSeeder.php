<?php

use Illuminate\Database\Seeder;

class ShipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = [
            '1','2','3','4','5','6','7','8','9','10',
            '11','12','13','14','15','16','17','18','19','20',
            '21','22','23','24','25','26','27','28','29','30'
        ];

        $shipment_id  = [
            '1','2','3','4','5','6','7','8','9','10',
            '11','12','13','14','15','16','17','18','19','20',
            '21','22','23','24','25','26','27','28','29','30'
        ];
        $product_id = [
            '1','2','3','4','5','6','7','8','9','10',
            '11','12','13','14','15','16','17','18','19','20',
            '21','22','23','24','25','26','27','28','29','30'
        ];
        $user_id = [
            '1','2','3','4','5','6','7','8','9','10',
            '11','12','13','14','15','16','17','18','19','20',
            '21','22','23','24','25','26','27','28','29','30'
        ];
        $amount =[
            1,2,3,4,5,6,7,8,9,10,
            11,12,13,14,15,16,17,18,19,20,
            21,22,23,24,25,26,27,28,29,30
        ];
        for($i = 0; $i < 30; $i++){
            DB::table('shipments')->insert([
                'id' => $id[$i],
                'shipment_id' => $shipment_id[$i],
                'user_id' => $user_id[$i],
                'product_id' => $product_id[$i],
                'amount' => $amount[$i],
                'status' => 0,
                'created_at' => new DateTime(),
            ]);
        }
    }
}
