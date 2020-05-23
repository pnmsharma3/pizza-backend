<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use Log;
class BackendController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function pizza_list()
    {
        $pizza = Pizza::all();
        return response($pizza);
    }
    
    public function order_create(Request $r)
    {
        Log::info($r);

        // $pizza = Pizza::all();
        // return response($pizza);
    }
}

