@extends('layout')

@section('content')
    <h1>Product Details</h1>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Name: {{ $product->name }}</h4>
            <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
