<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<20;$i++){
            if($i<5){    
                DB::table("products")->insert([
                    'name'=>$faker->name,
                    'image'=> "public/dc4.jfif",
                    'status'=>"user",
                    'cate_id'=>1,
                    'price'=>100000,
                    'quantity'=>7,
                    'description'=>"user",
                    'design'=>"user",
                    
                ]);
            }else if($i<10){
                DB::table("products")->insert([
                    'name'=>$faker->name,
                    'image'=>"public/n1.jfif",
                    'status'=>"user",
                    'cate_id'=>2,
                    'price'=>100000,
                    'quantity'=>5,
                    'description'=>"user",
                    'design'=>"user",
                ]);
            }else if($i<15){
                DB::table("products")->insert([
                    'name'=>$faker->name,
                    'image'=>"public/l7.jfif",
                    'status'=>"user",
                    'cate_id'=>3,
                    'price'=>100000,
                    'quantity'=>3,
                    'description'=>"user",
                    'design'=>"user",
                ]);
            } else {
                DB::table("products")->insert([
                    'name'=>$faker->name,
                    'image'=>"public/b5.jfif",
                    'status'=>"user",
                    'cate_id'=>4,
                    'price'=>100000,
                    'quantity'=>1,
                    'description'=>"user",
                    'design'=>"user"
                ]);
            }
    }
    }
}
