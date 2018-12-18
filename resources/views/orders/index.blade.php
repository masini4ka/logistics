@extends('master')
@section('content')
<h1>Created Orders</h1>
<div class="content">
<ul>
@foreach ($orders as $order)
<li><a href="/orders/{{$order->id}}">ID: {{$order->id}} From: {{$order->from}} To: {{$order->to}}</a></li>
@endforeach
</ul>
</div>
@endsection