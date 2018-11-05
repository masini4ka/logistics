@extends('master')
<title>Create New Order</title>
@section('content')
<p>Fill in the form below</p>
<form method="POST" action="/orders">
    @csrf
    <div><input type ="text" name = "from" placeholder="Pick up"></div>
    <div><input type ="text" name = "to" placeholder="Destination"></div>
    <button type ="submit">Create Order</button>
</form>
@endsection
