<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
    
    
    
    public function show()
    {
        $categories = DB::table('category')->get();
        //dd($posts);
        return response($categories, 200)->header('Content-Type', 'application/json');
    }
}
