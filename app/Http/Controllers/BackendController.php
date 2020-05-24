<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Order;
use App\Customer;

use DB;
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
        $customer_id=Customer::insertGetId([
            'name' => $r->address['name'],
            'address' => $r->address['address'],
            'phone' =>$r->address['phone'],
        ]);
        $new = new Order();
        $new->orderId=md5(time());
        $new->status='new';
        $new->customer_id = $customer_id;    
        $new->save();  
        $new->pizzas()->sync($r->cart);
        return response(array('orderId'=>$new->orderId), 200);


}


    
}