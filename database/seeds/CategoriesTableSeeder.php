<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $name = [
        '小説', '雑誌', 'コミック'
      ];

      for($i = 0; $i < 3; $i++){
        DB::table('categories')->insert([
          'name' => $name[$i],
          'created_at' => new DateTime(),
          'updated_at' => new DateTime()
        ]);
      }
    }
}
