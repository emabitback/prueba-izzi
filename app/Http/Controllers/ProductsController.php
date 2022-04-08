<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('add_product');
    }
    
    
    public function store(Request $request)
    {
        //$suc = $request->sucursal;
        
        $product = new Products();
        $product->product = $request->producto;
        $product->descripcion = $request->descripcion;
        $product->id_category  = $request->categoria;
        $product->id_office = $request->sucursal;
        $product->price = $request->precio;
        $product->buy_date = (new \DateTime())->format('Y-m-d H:i:s');
        $product->save();
        
        //dd($suc);
        return response("Al parecer todo ok", 200)->header('Content-Type', 'application/json');
        
    }
    
    
    public function all()
    {
        $posts = DB::table('category')->get();
        //dd($posts);
        return view('list_products');
    }
    
    
    
    public function show() {
        
        $products = DB::table('products')->get();
        return response($products, 200)->header('Content-Type', 'application/json');
        
    }
}