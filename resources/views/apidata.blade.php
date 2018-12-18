{{--@extends('master')--}}
@extends('layouts.app')
<title>API Data Details</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>User ID</th>
                <th>ID</th>
                <th>Title</th>
            </tr>
            </thead>
            @foreach ($json as $product)
                <tr>
                    @foreach ($product as $productt)
                        <td>{{$productt}}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
@endsection