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
use App\Models\Produdt;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\MessageBag;
use Cart;


class Front extends BaseController
{

use ValidatesRequests;

    public function register(Request $request)
    {
        $errors = new MessageBag;

        $this->validate($request, [
            'name'=> 'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:6'
            ]);



        $email = $request['email'];
        $name = $request['name'];

        $user = new user();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($request['password']);

        $user->save();

        Auth::login($user);
        $cart = Cart::content();

        return redirect()->route('shop', ['cart'=>$cart]);
    }

    public function login(Request $request) 
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['login_password']])) 
        {
            return redirect()->route('shop');
        }else{
            $loginerrors = new MessageBag(['login_password'=>['Email and/or password invalid']]);
            return redirect()->route('userregister')->withErrors($loginerrors);
        } 
    }


    public function loginauth(Request $request) 
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['login_password']])) 
        {
            return redirect()->route('shop');
        }else{
            $loginerrors = new MessageBag(['login_password'=>['You must first login/register']]);
            return redirect()->route('userregister')->withErrors($loginerrors);
        } 
    }

    public function logout() 
    {
        Auth::logout();
        
        return redirect()->route('shop');
    }

    public function cart(Request $request){
            $product_id = $request['id'];
            $product_name = $request['name'];
            $product_price = $request['price'];
            Cart::add(array('id' => $product_id, 'name'=>$product_name, 'qty'=>1, 'price'=>$product_price));
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        
        return view('cart',['categories'=>$categories, 'cart'=>$cart]);
    }

    public function customer(){
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        
        return view('customer-account',['categories'=>$categories, 'cart'=>$cart]);
    }

    public function contact(){
        $cart = Cart::content();

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        
        return view('contact',['categories'=>$categories, 'cart'=>$cart]);
    }

}
?>