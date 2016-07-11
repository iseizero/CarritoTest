@extends('layout.default')
@section('content')
  <div class="row">
    <h1>Detalle del producto</h1>
    <hr>
    <div class="col-md-6">
      <p>
        {{$product->name}}
      </p>
      <p class="text-center">
        <img class="img-responsive" src="{{$product->image}}" alt="" />
      </p>
    </div>
    <div class="col-md-6">
      <div class="info-product">
        <p>
          {{$product->description}}
        </p>
        <p>
          Precio: {{$product->price,2}}
        </p>
        <p>
          <a href="{{ route('add_product_at_cart_path', $product->slug)}}" class="btn btn-success " style="width:100%;"><i  class="fa fa-plus"></i>Lo quiero</a>
        </p>
      </div>
    </div>
  </div>
  <a href="{{route('home_store_path')}}" class="btn btn-primary">Volver</a>


@stop
