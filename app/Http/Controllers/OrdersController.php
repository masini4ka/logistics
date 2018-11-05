<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class OrdersController extends Controller
{
    //
    public function index(){
        $orders=\App\Order::all();
//        return $orders;

        return view('orders.index', compact('orders'));
    }
    public function create(){
        return view('createorder');
    }
    public function store(){
        $order=new \App\Order();
        $order->from=request('from');
        $order->to=request('to');
        $order->save();
        return redirect('/orders');
    }
}
