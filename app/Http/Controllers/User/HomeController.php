<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Support\Facades\Auth;

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
    function destroy($product_id,$user_id){
        Cart::where('product_id',$product_id )->where("user_id", $user_id)->delete();
        return redirect("/user/cart");
    }
    function cart(Request $request){
        $categories= Category::all();
        $user = Auth::user();
        if($user){
            $carts=Cart::where("user_id",$user->id)->get();
            $count= Cart::where("user_id",$user->id)->count();
            foreach ($carts as $cart){
                $cart->products;
            }
            //Tang do luong
            if ($request->product_id && $request->increment==1){
              $update= Cart::where("product_id",$request->product_id)->where('user_id',$user->id)->first();
              $update->products;
                if($update->products->quantity>$update->quantity){
                    Cart::where("product_id",$request->product_id)
                    ->where('user_id',$user->id)->update(["quantity"=>$update->quantity+1]);
                }else {
                    echo '<script>alert("Số lượng sản phẩm không đủ") </script>';
                }
            }
            //giam so luong
            if ($request->product_id && $request->decrease==1){
              $update= Cart::where("product_id",$request->product_id)->where('user_id',$user->id)->first();
              if ($update->quantity==0){
                Cart::where('product_id',$request->product_id )->where("user_id", $user->id)->delete();
                return redirect("/user/cart");
              }
              Cart::where("product_id",$request->product_id)
              ->where('user_id',$user->id)->update(["quantity"=>$update->quantity-1]);
            }
            // echo "<pre>" . json_encode($carts, JSON_PRETTY_PRINT). "</pre>"; 
            return view("user.cart",["categories"=>$categories,"carts"=>$carts]);
        }else {
            return view("user.cart",["categories"=>$categories]); 
         }
    }
    function cartStore($id){
        $user = Auth::user();
        if($user){
            $tam= Cart::where("user_id",$user->id)->where("product_id",$id)->first();
           
            if($tam){
                $tam->products;
                if($tam->products->quantity>$tam->quantity){
                    Cart::where("product_id",$id)
                    ->where('user_id',$user->id)->update(["quantity"=>$tam->quantity+1]);
                }else {
                    echo '<script>alert("Số lượng sản phẩm không đủ") </script>';
                }
            }else{
            $cart= new Cart();
            $cart->user_id=$user->id;
            $cart->product_id=$id;
            $cart->quantity=1;
            $cart->save();}
            return redirect("/user/cart");
        }else{
            return redirect("/user/cart");
        }
    }
    function order(){
        $pros=Cart::where("user_id", Auth::user()->id)->get();
        foreach($pros as $pro){
            $pro->products;
        }
         //echo "<pre>" . json_encode($pros, JSON_PRETTY_PRINT). "</pre>";  
        return view("user.order", ["pros"=>$pros]);
    }
}