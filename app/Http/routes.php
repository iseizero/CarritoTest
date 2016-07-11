<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::bind('product', function($slug){
  return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
  'uses' => 'StoreController@index',
  'as'=>'home_store_path'
]);

Route::get('products/{slug}',[
  'uses'=>'StoreController@show',
  'as' => 'product_detail_path'
]);

//Carrito---
Route::get('cart/show',[
  'uses'=>'CartController@show',
  'as'=>'show_cart_path'
]);
//Agregar item al Carrito
Route::get('cart/add/{product}',[
  'uses'=> 'CartController@add',
  'as'=>'add_product_at_cart_path'
]);
//Eliminar 1  elemento del Carrito
Route::get('cart/delete/{product}',[
  'uses'=>'CartController@delete',
  'as'=> 'delete_product_at_cart_path'
]);
//Eliminar todos los elementos del Carrito
Route::get('cart/trash',[
  'uses'=>'CartController@trash',
  'as'=>'trash_cart_path'
]);
//Actualizar Cantidad en el Carrito
Route::get('cart/update/{product}',[
  'uses'=>'CartController@update',
  'as'=>'cart_update_path'
]);
