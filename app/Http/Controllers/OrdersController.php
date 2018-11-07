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
    public function show(\App\Order $order){

    }
    public function update($id){
        $order=\App\Order::find($id);
        $order->from=request('from');
        $order->to=request('to');
        $order->save();
        return redirect('/orders');
    }
    public function destroy($id){
        $order=\App\Order::find($id);
        $order->delete();
        return redirect('/orders');

    }
    public function edit($id){//order
        $order=\App\Order::find($id);
        return view('orders.edit', compact('order'));

}
}
