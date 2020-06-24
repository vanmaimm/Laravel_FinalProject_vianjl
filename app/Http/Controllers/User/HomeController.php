<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    function index(){
        $products=Product::all();
        foreach ($products as $product){
            $product->category;
            $product->user;
        } 
        $topProducts=$products->take(3);
        $categories= Category::all();
        foreach($categories as $category){
            $category->products;
        }
              //  echo "<pre>" . json_encode($categories, JSON_PRETTY_PRINT). "</pre>";
       return view("user.home",["categories"=>$categories, "topProducts"=>$topProducts]);
    }
    function categoryProduct($catename, $id){
        $categories= Category::all();
        foreach($categories as $category){
            $category->products;
        }
        $catePro=Category::find($id);
        $catePro->products;
        //echo "<pre>" . json_encode($catePro, JSON_PRETTY_PRINT). "</pre>"; 
        return view("user.category",["categories"=>$categories,'catePro'=>$catePro]);
    }
    function detail($detail, $id){
        $categories= Category::all();
        $item=Product::find($id);
      //  $item=DB::table("product")->where("id",$id)->first();
        return view("user.detail",["categories"=>$categories,"item"=>$item]);
    }
}
