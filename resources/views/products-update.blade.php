@extends('layouts.master')
@section('title', 'Update')
@section('content')

    <div class="col-md-8 mx-auto mt-5">
        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST"> 
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name"><strong>Name</strong></label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="price"><strong>Price</strong></label>
                <input type="number" name="price" class="form-control" step="0.01" value="{{ $product->price }}">
            </div>
            <br>
            <div class="form-group">
                <label for="properties"><strong>Properties</strong></label>
                <div class="row">
                    <div class="col-md-2">
                        Key:
                    </div>
                    <div class="col-md-4">
                        Value:
                    </div>
                </div>
                @for ($i=0; $i <= 4; $i++)
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="properties[{{ $i }}][key]" class="form-control" value="{{ $product->properties[$i]['key'] ?? '' }}">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="properties[{{ $i }}][value]" class="form-control" value="{{ $product->properties[$i]['value'] ?? '' }}">
                    </div>
                </div>
                @endfor
            </div>
            <br>
            <div>
                <input class=" btn btn-success" type="submit">
            </div>
        </form>
    </div>

@endsection