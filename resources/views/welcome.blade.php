@extends('layouts.app')

@section('page-title')
    Home
@endsection

@section('main')

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4">
                    <img src="{{ $product['frontImage'] }}" alt="{{$product['name']}}" class="w-50">
                    <small class="m-0 fs-5 d-block">{{ $product['brand'] }}</small>
                    <p class="fw-bold fs-4 m-0">{{ $product['name'] }}</p>
                    <p class="text-danger fw-bold">14,99€ <s class="text-dark">{{ $product['price'] }}</s></p>
                </div>
            @endforeach
        </div>
    </div>
        
@endsection