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
    @if ($order->status->count())
       <div class="container">
           <table class="table table-striped table-hover">
               <thead>
               <tr>
                   <th>Status</th>
                   <th>Date</th>
               </tr>
               </thead>
        @foreach ($order->status as $status)
            <tr>
                <td>{{$status->status_description}}</td>
                <td>{{$status->updated_at}}</td>
            </tr>
        @endforeach
           </table>
       </div>
    @endif

@endsection