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
                <input type="text" class="input" name="from" placeholder="from" value="{{$order->from}}" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="to">To</label>
            <div class="control">
                <input type="text" class="input" name="to" placeholder="to" value="{{$order->to}}" required>
            </div>
        </div>
        {{--<div class="field">--}}
        {{--<label class="label" for="status">Status</label>--}}
        {{--<div class="control">--}}
        {{--<input type="text" class="input" name="status" placeholder="status" value="{{$order->status->last()['status_description']}}" required>--}}
        {{--@foreach ($order->status as $status)--}}
        {{--<li>{!! $status->status_description !!}</li>--}}
        {{--@endforeach--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="field">
            <label class="label" for="status">Status</label>
            <select class="form-control" name="status">
                @if ($order->status->last()->id == 1)
                    <option value="1" selected = "selected">Initiated</option>
                    <option value="2">On the way</option>
                    <option value="3">Ready for pickup</option>
                    <option value="4">Delivered</option>
                @elseif ($order->status->last()->id == 2)
                    <option value="1">Initiated</option>
                    <option value="2" selected = "selected">On the way</option>
                    <option value="3">Ready for pickup</option>
                    <option value="4">Delivered</option>
                @elseif ($order->status->last()->id == 4)
                    <option value="1">Initiated</option>
                    <option value="2">On the way</option>
                    <option value="3">Ready for pickup</option>
                    <option value="4" selected = "selected">Delivered</option>
                @elseif ($order->status->last()->id == 3)
                    <option value="1">Initiated</option>
                    <option value="2">On the way</option>
                    <option value="3" selected = "selected">Ready for pickup</option>
                    <option value="4">Delivered</option>
                @endif
            </select>
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
