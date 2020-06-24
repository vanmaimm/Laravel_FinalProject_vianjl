<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class DashboardController extends Controller
{
    function index(){
        return view("admin.dashboard");
    }
    function product(){
        $products=Product::all();
        foreach ($products as $product){
            $product->category;
        } 
        
        return view("admin.product.index",["products"=>$products]);
    }
    function create(){
        return view("admin.product.insert");
    }
}
