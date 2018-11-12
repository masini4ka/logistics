@extends('master')
<h1>Created Orders</h1>
<ul>
@foreach ($orders as $order)
<li><a href="/orders/{{$order->id}}">ID: {{$order->id}} From: {{$order->from}} To: {{$order->to}}</a></li>
@endforeach
</ul>