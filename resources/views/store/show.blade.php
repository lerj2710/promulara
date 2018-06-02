@extends('store.template')

@section('content')
    <h1>detalle del producto</h1>
    <div class="product-block">
        <img src="{{ $product->image }}" width="300">
    </div>
    <div class="product-block"><hr>

        <h3>{{ $product->name }}</h3>
        <div class="product-info">

            <p>{{ $product->description }}</p>
            <p>Precio:${{ number_format($product->price,2) }}</p>

            <a href="#">comprar</a>
        </div>
        
    </div>
    
    <p><a href="{{ route('products.index') }}">Regresar</a></p>

@stop