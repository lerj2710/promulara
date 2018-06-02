@extends('store.template')
@section('content')

    <div class="products">

        @foreach($products as $product)
            <div class="products">

                <h3>{{ $product->name }}</h3>
            <div class="product-info">
                <p>{{$product->extract}}</p>
                <p>Precio: ${{number_format($product->sale_price,2) }}</p>
                <p>
                    <a href="#">Comprar</a>
                    <a href="{{route('products.show',$product)}}">Leer Más</a>
                </p>
            </div>
            </div>

        @endforeach
    </div>
@endsection
