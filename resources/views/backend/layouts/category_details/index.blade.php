{{-- @extends('backend.master')
@section('page_content')


@endsection --}}

@extends('backend.master')
@section('page_content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Category List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1
            @endphp
            @foreach ($products as $product)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$product->category_name}}</td>

                <td>
                    <a href="{{route('category_details_edit',$product->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('category_details_delete',$product->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('category_details_create')}}" class="btn btn-success mt-5 mb-5">Please Create Meeee!!!!!</a>
</body>
</html>


@endsection
