<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Database\Schema\MySqlBuilder;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Bannerimage;
use Cart;
use spec\Prophecy\Doubler\ClassPatch\ReflectionClassNewInstancePatchSpec;

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
    public function admin()
    {
        $tables = DB::select('SHOW  TABLES');

        return view('admin', ['tables'=>$tables]);
    }
    public function table($tablename)
    {
        //return all tables in infinitees
        $tables = DB::select('SHOW  TABLES');

        $thistables = DB::select("SHOW  TABLES LIKE '$tablename'");

        $rows = DB::table($tablename)->orderBy('id','desc')->paginate(25);

        $columns = \Schema::getColumnListing($tablename);

        return view('table', ['tables'=>$tables, 'thistables'=>$thistables, 'rows'=>$rows, 'columns'=>$columns]);
    }

    public function insert($tablename)
    {
        //return all tables in infinitees
        $tables = DB::select('SHOW  TABLES');

        $thistables = DB::select("SHOW  TABLES LIKE '$tablename'");

        $columns = \Schema::getColumnListing($tablename);

        return view('insert', ['tables'=>$tables, 'thistables'=>$thistables, 'columns'=>$columns]);
    }

    public function submit(Request $request)
    {
        //return all tables in infinitees
        $tables = DB::select('SHOW  TABLES');

        $tablename = $request['table'];

        $thistables = DB::select("SHOW  TABLES LIKE '$tablename'");

        $columns = \Schema::getColumnListing($tablename);

        $tablemodels = ucfirst($tablename);
        $tablemodel = substr($tablemodels, 0,-1);

        $table = 'App\\Models\\'.$tablemodel;
        $tablemodelx = new $table;

        foreach ($columns as $column){
            $tablemodelx->$column = $request[$column];
        }
        $tablemodelx->save();

       // return view('submit', ['tables'=>$tables, 'thistables'=>$thistables, 'columns'=>$columns]);
    }
}
?>