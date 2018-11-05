@extends('master')
<h1>Created Orders</h1>
@foreach ($orders as $order)
    <li>ID: {{$order->id}} From: {{$order->from}} To: {{$order->to}}</li>
@endforeach