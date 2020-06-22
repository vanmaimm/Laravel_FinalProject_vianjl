<?php

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("carts")->insert([
            'user_id'=>1,
            "product_id"=>4,
            'quantity'=>2
        ]);
        DB::table("carts")->insert([
            'user_id'=>1,
            "product_id"=>7,
            'quantity'=>1
        ]);
    }
}
