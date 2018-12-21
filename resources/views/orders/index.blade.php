@extends('master')
@section('content')
<h1>Created Orders</h1>
<div class="content">
<ul>
@foreach ($orders as $order)
<ul><a href="/orders/{{$order->id}}">ID: {{$order->id}} From: {{$order->from}} To: {{$order->to}}</a></ul>
@endforeach
</ul>
</div>
@endsection