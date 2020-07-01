<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
Use App\Category;
Use App\Order;

class DashboardController extends Controller
{
    function index(){
        return view("admin.dashboard");
    }

    ///Product
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
        $cates=Category::all();
        return view("admin.product.insert",["cates"=>$cates]);
    }
    function store(Request $request){
        $request->validate([
            "name"=>"required",
            'img' => 'required',
            "cate"=>"required",
            "quantity"=>"required|min:1|digits_between: 1,5",
            "price"=>"required"
        ]);
        $name=$request->input("name");
        $img = $request->file("img")->store("public");
        $status= $request->input("status");
        $cate = $request->cate;
        $price = $request->price;
        $quantity = $request->quantity;
        $desc = $request->desc;
        $design = $request->design;

        $newProduct = new Product();
        $newProduct->name=$name;
        $newProduct->image=$img;
        $newProduct->status=$status;
        $newProduct->cate_id=$cate;
        $newProduct->price=$price;
        $newProduct->description=$desc;
        $newProduct->quantity=$quantity;
        $newProduct->design=$design;
        $newProduct->save();

    }
    function edit($id){
        $cates=Category::all();
        $product=Product::find($id);
        return view("admin.product.edit", ["cates"=>$cates, "product"=>$product]);
    }
    function update($id, Request $request){
        $request->validate([
            "name"=>"required",
            'img' => 'required',
            "cate"=>"required",
            "quantity"=>"required|min:1|digits_between: 1,5",
            "price"=>"required"
        ]);
        $name=$request->input("name");
        $img = $request->file("img")->store("public");
        $status= $request->input("status");
        $cate = $request->cate;
        $price = $request->price;
        $quantity = $request->quantity;
        $desc = $request->desc;
        $design = $request->design;

        $product = Product::find($id);
        $product->name=$name;
        $product->image=$img;
        $product->status=$status;
        $product->cate_id=$cate;
        $product->price=$price;
        $product->description=$desc;
        $product->quantity=$quantity;
        $product->design=$design;
        $product->save();
        return redirect("/admin/product"); 
    }
    function destroy($id){
        Cart::where('product_id',$id)->delete();
        Product::find($id)->delete();
        return redirect("/admin/product");
    }
    //Category
    function category(){
        $categories=Category::all();
        return view("admin.category.index", ["categories"=>$categories]);
    }
    function cateStore(Request $request){
        $name= $request->name;
        $cate = new Category();
        $cate->name=$name;
        $cate->save();
        return redirect("admin/category");
    }
    function cateDestroy($id){
        Product::where('cate_id',$id )->delete();
        Category::find($id)->delete();
        return redirect("/admin/category");
    }

    //Order
    function order(){
        $orders= Order::all();
      
        foreach ($orders as $order){   
                $order->detail=json_decode($order->detail);
        }
        return view("admin.order.index", ["orders"=>$orders]);
    }
}
