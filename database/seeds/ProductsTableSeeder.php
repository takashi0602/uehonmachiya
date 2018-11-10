<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorise_id = [
            1, 2, 3
        ];

        $suppliers_id = [
            1, 2, 3
        ];

        $name = [
            '羅生門', '火花', 'バッテリー'
        ];

        $author = [
            '芥川龍之介', '又吉直樹', 'あさのあつこ'
        ];

        $img = [
            'http://placehold.it/300/?text=book1', 'http://placehold.it/300/?text=book2', 'http://placehold.it/300/?text=book3'
        ];

        $description = [
            'これは説明文です。',
            'これは説明文です。',
            'これは説明文です。'
        ];

        $company = [
            '新潮社', '文藝春秋', '角川書店'
        ];

        $price = [
            100, 200, 150
        ];

        $sales_price = [
            500, 1000, 600
        ];

        for($i = 0; $i < 3; $i++){
            DB::table('products')->insert([
              'categorise_id' => $categorise_id[$i],
              'suppliers_id' => $suppliers_id[$i],
              'name' => $name[$i],
              'author' => $author[$i],
              'img' => $img[$i],
              'description' => $description[$i],
              'company' => $company[$i],
              'price' => $price[$i],
              'sales_price' => $sales_price[$i],
              'created_at' => new DateTime(),
              'updated_at' => new DateTime()
            ]);
        }

    }
}
