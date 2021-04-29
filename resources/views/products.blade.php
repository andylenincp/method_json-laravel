@extends('layouts.master')
@section('title', 'Products')
@section('content')
    
    <br><br>
    <center>
        <a href="/products-create" class="btn btn-success">
            <span>Crear registro</span>
        </a>
    </center>

    <div class="col-md-8 mx-auto mt-5">
        <table class="table table-striped text-center">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Properties</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach($products as $product)
            <tr>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td align="left">
                    @foreach ($product->properties as $property)
                        <b>{{ $property['key'] }}</b>: {{ $property['value'] }}<br />
                    @endforeach
                </td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                    <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
        </table>
    </div>

@endsection