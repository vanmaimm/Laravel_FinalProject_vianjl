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
    function product(Request $request){
        $page = $request->page;
        $products = Product::all()->skip($page * 5)->take(5);
        if($products->isEmpty()){ //Nếu photo lớn hơn số lượng trong database sẽ trả về 0
            $products = Product::all()->take(5);
            return redirect('admin/product/?page=0');
        }else if($page<0){
            $totalPage = round(count(products::all())/5)-1;
            return redirect('admin/product/?page='.$totalPage);
        }

        return view('admin.product.index', ["products" => $products, "page" => $page]);
        
        // $products=Product::all();
        // foreach ($products as $product){
        //     $product->category;
        // } 
        
        // return view("admin.product.index",["products"=>$products]);
    }
    function create(){
        return view("admin.product.insert");
    }
}
