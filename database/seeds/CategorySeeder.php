<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            'name'=>"Dây chuyền"
        ]);
        DB::table("categories")->insert([
            'name'=>"Nhẫn"
        ]);
        DB::table("categories")->insert([
            'name'=>"Vòng tay"
        ]);
        DB::table("categories")->insert([
            'name'=>"Hoa tai"
        ]);
    }
}
