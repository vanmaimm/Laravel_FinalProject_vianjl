<?php

use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dc=0.5;
        for($i=0; $i<10;$i++){
            $dc=$dc-0.05;
        DB::table("coupons")->insert([
            'coupon_code'=>"VAAN".$i,
            'discount_amount'=>$dc,
            "quantity"=>$i
        ]);}
    }
}
