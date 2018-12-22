<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Order;
class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//->only(['create',''])//->except([''])
    }

    //
    public function index(){
//        $orders=\App\Order::all();
        $orders=\App\Order::where('owner_id', auth()->id())->get();
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
        $order->owner_id=auth()->id();
        $order->save();

        $status=\App\Status::find(1);
        $order->status()->attach($status);

        return redirect('/orders');
    }
    public function show(Order $order){
        if($order->owner_id !=auth()->id()){
            abort(403);
        }
//        dd($order->status());
        return view('orders.show', compact('order'));
    }
    public function update(Order $order){
        $order->from=request('from');
        $order->to=request('to');
        $order->save();

        $status=\App\Status::find(request('status'));
        $order->status()->attach($status);
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
