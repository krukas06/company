<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Order;
use App\Repository\OrdersRepository;

class OrdersController extends SiteController
{
    //

    public function __construct(OrdersRepository $o_rep){

        $this->o_rep=$o_rep;
         
    }

    public function add(Request $request){
    	$data = $request->except('email');
    	$order = new Order;
    	$order -> fill($data);
    	$order -> save();

    	return view('success');
    }
    
    public function orderList(){
    	
    	$orders = $this->getOrders();
    	//dd($orders);
    	return view('list_order')->with('orders', $orders);
    }

    public function getOrders(){

        $orders= $this->o_rep->get('*');

        return $orders;
    }
}
