@extends('master')
{{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}
<title>Create New Order</title>
@section('content')
<p>Fill in all fields below</p>
<form method="POST" action="/orders">
    @csrf
    <div class="field">
        <label class="label" for="from">From</label>
        <input type ="text" class="input {{$errors->has('from') ? 'is-danger': ""}}" name = "from" value = "{{old('from')}}" placeholder="Pick up">
    </div>
    <div class="field">
        <label class="label" for="to">To</label>
        <input type ="text" class="input {{$errors->has('to') ? 'is-danger': ""}}" name = "to"  value = "{{old('to')}}" placeholder="Destination">
    </div>
    {{--<div class="field">--}}
        {{--<label class="label" for="status">Status</label>--}}
        {{--<input type ="text" class="input" name = "status"  value = "{{old('status')}}" placeholder="Status">--}}
    {{--</div>--}}
    <div class="field">
        <div class="control">
            <button type ="submit" class="button is-link">Create Order</button>
        </div>
    </div>
    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
@endsection
