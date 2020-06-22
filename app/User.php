<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     public function UserInfor(){
        return $this->hasOne("App\UserInformation", "user_id");
    }
    public function Product(){
        return $this->belongsToMany("App\product","carts","user_id", "product_id" );
    }
}
