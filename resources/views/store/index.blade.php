@extends('layout.default')
@section('content')
  @include('store.partials.slider')
<h1>Lista de productos</h1>
<ul class="list-unstyled">
  @foreach($products as $product)
    <li class="col-md-3">
      {{$product->name}}
      <p>
        <img class="img-responsive" src="{{$product->image}}" alt="" />
      </p>
      <p>
        <h3 class="label label-success">{{$product->price}}</h3>
      </p>
      <p>
        <a href="{{ route('add_product_at_cart_path', $product->slug)}}" class="btn btn-success">lo quiero</a>
        <a href="{{ route('product_detail_path', $product->slug)}}" class="btn btn-info">Leer mas</a>
      </p>
    </li>
  @endforeach
</ul>
@stop
