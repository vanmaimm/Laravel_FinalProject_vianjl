<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Category(){
        return $this->belongsTo("App\Category","cate_id", "id" );
    }
    public function User(){
        return $this->belongsToMany("App\User","carts","user_id", "product_id" );
    }
}
