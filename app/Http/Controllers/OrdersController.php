<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Order;
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
        request()->validate([
            'from'=>['required','min:3', 'max:255'],
            'to'=>['required','min:3', 'max:255']
        ]);
        $order=new Order();
        $order->from=request('from');
        $order->to=request('to');
        $order->save();
        return redirect('/orders');
    }
    public function show(Order $order){
//        $order=\App\Order::findOrFail($id);
        return view('orders.show', compact('order'));

    }
    public function update(Order $order){
        $order->from=request('from');
        $order->to=request('to');
        $order->save();
        return redirect('/orders');
    }
    public function destroy(Order $order){
        $order->delete();
        return redirect('/orders');
    }
    public function edit(Order $order){
        return view('orders.edit', compact('order'));

}
}
