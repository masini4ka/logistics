{{--@extends('master')--}}
@extends('layouts.app')
<title>API Data Details</title>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">--}}
{{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>--}}


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<!--Data Table-->
<script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

<!--Export table buttons-->
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
<script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<!--Export table button CSS-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">


<script id="js">$(document).ready( function () {
        $.noConflict();
        $('#sort-table').DataTable();
    } );
</script>
@section('content')
    <div class="container">
        <table id="sort-table" class="table table-striped table-hover tablesorter">
            <thead>
            <tr>
                <th>User ID <i class = "glyphicon glyphicon-chevron-down"></i></th>
                <th>ID <i class = "glyphicon glyphicon-chevron-down"></i></th>
                <th>Title <i class = "glyphicon glyphicon-chevron-down"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($json as $product)
                <tr>
                    @foreach ($product as $productt)
                        <th>{{$productt}}</th>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection