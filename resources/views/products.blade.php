@extends('layouts.app')
 
@section('title', 'Products')
 
@section('content')
 
    <div class="container products">
 
        <div class="row">
 
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3" style="margin-top:60px;">
                    <div class="card shadow">
                     <div class="card-body">
                        <div class="caption">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $product['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Price: </strong>Rp. {{ $product->price }}</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Tambah Keranjang</a> </p>
                        </div>
                     </div>
                    </div>
                </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
 
@endsection