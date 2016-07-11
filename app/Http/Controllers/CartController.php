<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\Product;

class CartController extends Controller
{
    public function __construct()
    {
      if (!\Session::has('cart')) {
        \Session::put('cart', array());
      }
    }
    //Show cart
    public function show()
    {
      $cart = \Session::get('cart');
      return view('store.cart', compact('cart'));
    }
    //add item
    public function add(Product $product)
    {
      $cart = \Session::get('cart');
      $product->quantity = 1;//Propiedad de cantidad
      $cart[$product->slug]= $product;//Guardo en array Carrito
      \Session::put('cart', $cart);

      return redirect()->route('show_cart_path');

    }
    //delete item
    public function delete(Product $product)
    {
      # code...
      $cart = \Session::get('cart');
      //Eliminar del array por slug
      unset($cart[$product->slug]);
      \Session::put('cart', $cart);

      return redirect()->route('show_cart_path');

    }
    //Update item
    public function update(Product $product, $quantity)
    {
      $cart = \Session::get('cart');
      $cart[$product->slug]->quantity = $quantity;
      //Actualizo variable de Session
      \Session::put('cart',$cart);

      return redirect()->route('show_cart_path');
    }
    //Trash cart
    public function trash()
    {
      \Session::forget('cart');

      return redirect()->route('show_cart_path');
    }
    //Total
}
