<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(GiftsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ShipmentsTableSeeder::class);
        $this->call(OrderingsTableSeeder::class);
        $this->call(ArrivalsTableSeeder::class);
        $this->call(RanksTableSeeder::class);
    }

}
