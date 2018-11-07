@extends('master')
<title>Edit Order</title>
@section('content')
    <h1 class="title">Edit order</h1>
    <form method="POST" action="/orders/{{$order->id}}">
        {{method_field('PATCH')}}
        @csrf
        <div class="field">
            <label class="label" for="from">From</label>
            <div class="control">
                <input type="text" class="input" name="from" placeholder="from" value="{{$order->from}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="to">To</label>
            <div class="control">
                <input type="text" class="input" name="to" placeholder="to" value="{{$order->to}}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/orders/{{$order->id}}">
        {{method_field('DELETE')}}
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Order</button>
            </div>
        </div>
    </form>
@endsection
