<?php

use Illuminate\Database\Seeder;

class UserInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("user_information")->insert([
            'user_id'=>1,
            'name'=>"Mai Thi My Van",
            'address'=>"99 To Hien Thanh, Da Nang",
            'phone_number'=>"0906490836"
        ]);
    }
}
