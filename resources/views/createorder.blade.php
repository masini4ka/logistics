@extends('master')
{{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}
<title>Create New Order</title>
@section('content')
<p>Fill in all fields below</p>
<form method="POST" action="/orders">
    @csrf
    <div class="field">
        <label class="label" for="from">From</label>
        <input type ="text" class="input" name = "from" placeholder="Pick up">
    </div>
    <div class="field">
        <label class="label" for="to">To</label>
        <input type ="text" class="input" name = "to" placeholder="Destination">
    </div>
    <button type ="submit">Create Order</button>
</form>
@endsection
