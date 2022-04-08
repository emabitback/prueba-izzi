<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfficeController extends Controller
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
        $offices = DB::table('office')->get();
        //dd($posts);
        return response($offices, 200)->header('Content-Type', 'application/json');
    }
}
