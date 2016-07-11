@extends('layout.default')
@section('content')
  <div class="text-center">
    <div class="page-header">
      <h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
    </div>
    @if(count($cart))
      <p>
        <a href="{{ route('trash_cart_path')}}" class="btn btn-danger">
          Vaciar todo el carrito
        </a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>
                Imagen
              </th>
              <th>
                Producto
              </th>
              <th>
                Precio
              </th>
              <th>
                Cantidad
              </th>
              <th>
                Sub-total
              </th>
              <th>
                Quitar
              </th>
            </tr>
          </thead>
          <tbody>
              @foreach($cart as $item)
                <tr>
                  <td>
                    <img src="{{ $item->image}}" width="80" alt="" />
                  </td>
                  <td>
                    {{$item->name}}
                  </td>
                  <td>
                    {{number_format($item->price,2)}}
                  </td>
                  <td>

                    <input type="number"
                     min="1"
                     max="100"
                     value="{{$item->quantity}}"
                     id="product_{{$item->id}}">

                    <a href="#" class="btn btn-warning btn-update-item"
                      data-href="{{ route('cart_update_path', $item->slug)}}"
                      data-id="{{$item->id}}">
                      Add
                    </a>
                    
                  </td>
                  <td>
                    {{number_format($item->price* $item->quantity, 2)}}
                  </td>
                  <td>
                    <a href="{{ route('delete_product_at_cart_path', $item->slug)}}" class="btn btn-danger">Eliminar</a>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    @else
      <p class="label label-warning">No hay productos en el carro de compras :(</p>
    @endif
    <p>
      <br>
      <a href="{{route('home_store_path')}}" class="btn btn-info">Volver a comprar</a>
      <a href="#" class="btn btn-info">Continuar</a>
    </p>
  </div>
@stop
