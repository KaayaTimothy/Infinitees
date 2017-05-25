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
use App\Models\Department;
use App\Models\Product;
use App\Models\View;
use App\Models\Category;
use Cart;

class ProductController extends BaseController
{

    public function product($productname)
    {
        //return product request
    	$product = Product::ProductLocatedAt($productname);

        //return category for the product
    	$category = Product::find($product->id)->categories()->first();
    	/**
        *return all departments with their categories
        */
    	$categories = Category::has('subcategories', '>=','0')->get();

        //product detail
    	$products = DB::table('products')->where('name', '=', $product->name)->get();

    	$categorys = Product::find($product->id)->categories()->get();
        $subcategorys = Product::find($product->id)->subcategories()->get();

		$simillarproducts = Product::whereHas('categories', function($query) use($product, $category){
			$query->where('name', $category->name);
		})->whereNotIn('name', [$product->name])->limit(3)->get();    	

        $recentlyViewedProducts = DB::table('products')->orderBy('views','desc')->limit(3)->get();

        $cart = Cart::content();

        //access the number of views for this product
        $views = DB::table('products')->where('id', '=', $product->id)->first();
        
            Product::where('id', $product->id)->update(array('views'=>++$views->views));
        
        

    	return view('product', ['subcategorys'=>$subcategorys,'categories'=>$categories,'categorys'=>$categorys, 'simillarproducts'=>$simillarproducts, 'products'=>$products, 'cart'=>$cart, 'recentlyViewedProducts'=>$recentlyViewedProducts]);
    }

    public function subcategory($subcategoryname)
    {

        $products = DB::table('products')->where('display', '=', 3)->paginate(2);

       return view('subcategory');
    }

    public function category($categoryname)
    {

        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();


        $products = Product::whereHas('categories', function($query) use($categoryname){
            $query->where('name', $categoryname);
        })->paginate(6);


        $categorys = Category::has('subcategories', '>=','0')->where('name','=',$categoryname)->get();
        

        $cart = Cart::content();


       return view('category', ['categorys'=>$categorys, 'categories'=>$categories,'products'=>$products, 'cart'=>$cart]);
}

    public function recentlyviewed()
    {
        /**
        *return all departments with their categories
        */
        $categories = Category::has('subcategories', '>=','0')->get();
        
        $products = DB::table('products')->orderBy('views','desc')->limit(12)->paginate(6);


        $cart = Cart::content();


      return view('recently-viewed', ['categories'=>$categories,'products'=>$products, 'cart'=>$cart]);
    }
    public function recentlyviewed24()
    {
        /**
         *return all departments with their categories
         */
        $categories = Category::has('subcategories', '>=','0')->get();

        $products = DB::table('products')->orderBy('views','desc')->limit(24)->paginate(12);


        $cart = Cart::content();


        return view('recently-viewed', ['categories'=>$categories,'products'=>$products, 'cart'=>$cart]);
    }
    public function recentlyviewedall()
    {
        /**
         *return all departments with their categories
         */
        $categories = Category::has('subcategories', '>=','0')->get();

        $products = DB::table('products')->orderBy('views','desc');


        $cart = Cart::content();


        return view('recently-viewed', ['categories'=>$categories,'products'=>$products, 'cart'=>$cart]);
    }
}
?>