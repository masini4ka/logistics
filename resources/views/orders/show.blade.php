@extends('master')
<title>Order Details</title>
@section('content')
    <style>
        p.dotted {outline-style: dotted;}
        p.dashed {outline-style: dashed;}
    </style>

    <h1>Order Details</h1>
    <div class="content">
    <p align="left">ID: {{$order->id}}</p>
    <p align="left">Origin: {{$order->from}}</p>
    <p align="left">Destination: {{$order->to}}</p>
        <p align="left">Created: {{$order->created_at}}</p>
        <p align="left">Last Update: {{$order->updated_at}}</p>
    </div>
    <p class="dotted">
        <a href="/orders/{{$order->id}}/edit">Edit</a>
    </p>
<p>.....>>..>>>TRACKING>>>..>>.....</p>
    @if ($order->status->count())
       <div>
        @foreach ($order->status as $status)
            <p align="left">STATUS: {{$status->status_description}} FROM: {{$status->updated_at}} </p>
        @endforeach
       </div>
    @endif

@endsection