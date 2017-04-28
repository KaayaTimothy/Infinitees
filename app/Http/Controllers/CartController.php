<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\MessageBag;
use Cart;


class CartController extends BaseController{


    public function cart(Request $request){
            $product_id = $request['id'];
            $product_name = $request['name'];
            $product_price = $request['price'];
            $product_image = $request['image'];
            Cart::add(array('id' => $product_id, 'name'=>$product_name, 'qty'=>1, 'price'=>$product_price, 'options'=>['image'=>$product_image]));
        $cart = Cart::content();

        //return category for the product
        $category = Product::find($product_id)->categories()->first();

        $simillarproducts = Product::whereHas('categories', function($query) use($product_name, $category){
            $query->where('name', $category->name);
        })->whereNotIn('name', [$product_name])->limit(3)->get();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        
        return view('cart',['categories'=>$categories, 'cart'=>$cart, 'simillarproducts'=>$simillarproducts]);
    }

    public function remove($rowId){
        
        Cart::remove($rowId);
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        return view('cart',['categories'=>$categories, 'cart'=>$cart]);
    }

    public function show(){
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        return view('cart',['categories'=>$categories, 'cart'=>$cart]);
    }

     public function upgrade(Request $request){

        $quantities = $request['quantity'];

        foreach ($quantities as $key => $value) {
            Cart::update($key, $value);
        }
        
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        return view('cart',['categories'=>$categories, 'cart'=>$cart]);
    }

    public function checkout(){
        
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        return view('checkout',['categories'=>$categories, 'cart'=>$cart]);
    }

    
public function orderreview(){
        
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        return view('orderreview',['categories'=>$categories, 'cart'=>$cart]);
    }

    


    use ValidatesRequests;
    public function placeorder(Request $request)
    {
        $errors = new MessageBag;
        $cart = Cart::content();

        $this->validate($request, [
            'address'=>'required',
            'phone'=>'required',
            ]);


        $deliveryaddress = $request['address'];
        $telephone = $request['phone'];

        $order = new Order();

        $order->user_id = Auth::id();
        $order->price = Cart::subtotal();
        $order->discounted_price = '';
        $order->status = 'being prepared';
        $order->transport = '';
        $order->telephone = $telephone;
        $order->address = $deliveryaddress;


        $order->save();

        $orderid = $order->id;

        
        foreach ($cart as $item) {
            $orderproduct = new OrderProduct();
         $orderproduct->order_id = $orderid;
         $orderproduct->product_id = $item->id;
         $orderproduct->quantity = $item->qty; 
         $orderproduct->save();
        }

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        Cart::destroy();

        $orders = Order::whereHas('products', function($query) use($orderid){
            $query->where('order_id', $orderid);
        })->get();

        return view('order',['categories'=>$categories, 'cart'=>$cart, 'orders'=>$orders]);
    }

    public function customerorders(){
        $cart = Cart::content();

        $userid = Auth::id();

        $user = User::find($userid);

        $orders = $user->orders()->get();       

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        return view('customerorders',['categories'=>$categories, 'cart'=>$cart, 'orders'=>$orders]);
    }
}
?>