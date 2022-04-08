<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    
    
    
    
    public function show()
    {
        $profiles = DB::table('profile')->get();
        //dd($posts);
        return response($profiles, 200)->header('Content-Type', 'application/json');
    }
}
