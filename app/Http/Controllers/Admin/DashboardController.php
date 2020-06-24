<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
Use App\Category;

class DashboardController extends Controller
{
    function index(){
        return view("admin.dashboard");
    }
    function product(Request $request){
        $page = $request->page;
        $products = Product::all()->skip($page * 5)->take(5);
        if($products->isEmpty()){ 
            $products = Product::all()->take(5);
            return redirect('admin/product/?page=0');
        }else if($page<0){
            $totalPage = round(count(products::all())/5)-1;
            return redirect('admin/product/?page='.$totalPage);
        }

        return view('admin.product.index', ["products" => $products, "page" => $page]);
    }
    function create(){
        return view("admin.product.insert");
    }
    function destroy($id){
        Cart::where('product_id',$id)->delete();
        Product::find($id)->delete();
        return redirect("/admin/product");
    }
}
