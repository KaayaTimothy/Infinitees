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
use App\Models\Bannerimage;
use Cart;
//use App\Repositories\Department\DepartmentInterface as DepartmentInterface;

class NavController extends BaseController
{
	/*public function __construct(DepartmentInterface $department)
	{
		$this->department=$department;
	}*/

    public function home(){
    
    	return view('home');
    }

    public function shop()
    {
        /**
        *return all departments with their categories
        */
    	$categories = Category::has('subcategories', '>=','0')->get();

        /**
        *return products to be displayed for hot this week
        */
        $products = DB::table('products')->where('display', '=', 3)->limit(15)->get();

        /**
        *return products new arrivals
        */
        $bannerimages = Bannerimage::where('id','>','0')->get();

        $cart = Cart::content();
        foreach ($bannerimages->chunk(2) as $chunk) {
            # code...
        }

    	return view('shop', ['categories'=>$categories,'products'=>$products, 'cart'=>$cart, 'bannerimages'=>$bannerimages]);
    }

    public function userregister()
    {
        $cart = Cart::content();
        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();

        return view('register', ['categories'=>$categories, 'cart'=>$cart]);
    }

    public function search(Request $request)
    {
        $cart = Cart::content();

        $searchterm = $request['search'];
        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();


        $products = Product::where('name','like','%'.$searchterm.'%')->paginate(3);

        return view('search', ['categories'=>$categories, 'cart'=>$cart, 'products'=>$products]);
    }
}
?>