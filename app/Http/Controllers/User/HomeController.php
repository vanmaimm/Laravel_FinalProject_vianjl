<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use App\UserInformation;
use App\Order;

class HomeController extends Controller
{
    function index(){
        $categories= Category::all();
        foreach($categories as $category){
           $category->products;
        }      
             //  echo "<pre>" . json_encode($categories, JSON_PRETTY_PRINT). "</pre>";
         return view("user.home",["categories"=>$categories]);
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
            // echo "<pre>" . json_encode($carts, JSON_PRETTY_PRINT). "</pre>"; 
            return view("user.cart",["categories"=>$categories,"carts"=>$carts]);
        }else {
            return view("user.cart",["categories"=>$categories]); 
         }
    }
    function increate($id){
        $user = Auth::user();
        $update= Cart::where("product_id",$id)->where('user_id',$user->id)->first();
              $update->products;
                if($update->products->quantity > $update->quantity){
                    Cart::where("product_id",$id)
                    ->where('user_id',$user->id)->update(["quantity"=>$update->quantity+1]);
                }else {
                    echo '<script>alert("Số lượng sản phẩm không đủ") </script>';
                }
                return redirect("/user/cart");
    }
    function decreate($id){
        $user = Auth::user();
        $update= Cart::where("product_id",$id)->where('user_id',$user->id)->first();
        $update->products;
        if ($update->quantity==1){
          Cart::where('product_id',$id )->where("user_id", $user->id)->delete();
          return redirect("/user/cart");
        }
        Cart::where("product_id",$id)
        ->where('user_id',$user->id)->update(["quantity"=>$update->quantity-1]);
                return redirect("/user/cart");
    }
    function cartStore($id){
        $user = Auth::user();
        if($user){
            $tam= Cart::where("user_id",$user->id)->where("product_id",$id)->first();
            $product=Product::find($id);
            if($tam){
                $tam->products;
                if($tam->products->quantity>$tam->quantity){
                    Cart::where("product_id",$id)
                    ->where('user_id',$user->id)->update(["quantity"=>$tam->quantity+1]);
                }else {
                    echo '<script>alert("Số lượng sản phẩm không đủ") </script>';
                }
            }else {
            $cart= new Cart();
            $cart->user_id=$user->id;
            $cart->product_id=$id;
            $cart->quantity=1;
            $cart->save();
            return redirect("/user/cart");}
           
        }else{
            return redirect("/user/cart");
        }
    }
    function order(Request $request){
        $pros=Cart::where("user_id", Auth::user()->id)->get();
        foreach($pros as $pro){
            $pro->products;
        }
        $user=UserInformation::where('user_id','=',Auth::user()->id)->first();
         
       // echo "<pre>" . json_encode($pros, JSON_PRETTY_PRINT). "</pre>";  
        return view("user.order", ["pros"=>$pros,"user"=>$user]);
    }
    function orderProduct(Request $request){
        $name=$request->name;
        $address=$request->address;
        $phone=$request->phone;
        $total=$request->total;
        //lấy thông tin detail
        $pros=Cart::where("user_id", Auth::user()->id)->get();
        foreach($pros as $pro){
            $pro->products;
            $infor[]=array(
               "product_name"=> $pro->products->name,
               "image"=> $pro->products->image,
               "quantity"=>$pro->quantity,
               "price"=>$pro->products->price
           );
        }
        $detail=json_encode($infor);
       
       $user=UserInformation::where('user_id','=',Auth::user()->id)->first();

       // Giảm số lượng trong hệ thống
        foreach($pros as $pro){
            Product::where("id",$pro->product_id)->update(["quantity"=>$pro->products->quantity - $pro->quantity]);
        } 

       // Xóa giỏ hàng
      Cart::where("user_id", Auth::user()->id)->delete();
      
      // them vao order 
       $order = new Order();
       $order->user_id=Auth::user()->id;
       $order->customer_name=$name;
       $order->address=$address;
       $order->phone_number=$phone;
       $order->detail=$detail;
       $order->total= $total;
       $order->save();
       return redirect ("/home");
    }
    function search(Request $request){
        $categories= Category::all();
        $key=$request->key;
        $products=Product::where("name", 'like', "%".$key."%")->get();
       return view("user.search",["categories"=>$categories,"products"=>$products]);
    }
}