<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
{
  public function run()
  {
    $data = array(
      [
        'name'=>'Polera 1',
        'slug'=>'polera corta 1',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
        'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut',
        'price'=>250.00,
        'image'=>'http://www.clarin.com/deautos/Ferrari_CLAIMA20160118_0230_39.jpg',
        'visible'=>1,
        'created_at'=> new DateTime,
        'updated_at'=>new DateTime,
        'category_id'=>1
      ],
      [
        'name'=>'Polera 2',
        'slug'=>'polera corta 2',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
        'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut',
        'price'=>275.00,
        'image'=>'http://s03.s3c.es/imag/_v0/640x350/e/1/2/ferrari_futuro.jpg',
        'visible'=>1,
        'created_at'=> new DateTime,
        'updated_at'=>new DateTime,
        'category_id'=>1
      ],
      [
        'name'=>'Polera 3',
        'slug'=>'polera corta 3',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
        'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut',
        'price'=>195.00,
        'image'=>'http://lavidavamagazine.com/wp-content/uploads/2016/05/lamborghini.jpg',
        'visible'=>1,
        'created_at'=> new DateTime,
        'updated_at'=>new DateTime,
        'category_id'=>1
      ],
      [
        'name'=>'Game 1',
        'slug'=>'juego 1',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
        'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut',
        'price'=>250.00,
        'image'=>'http://blog.caranddriver.com/wp-content/uploads/2015/10/Ferrari-F12tdf-Edition-PLACEMENT.jpg',
        'visible'=>1,
        'created_at'=> new DateTime,
        'updated_at'=>new DateTime,
        'category_id'=>2
      ],
      [
        'name'=>'Game 2',
        'slug'=>'juego 2',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
        'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut',
        'price'=>250.00,
        'image'=>'http://pictures.topspeed.com/IMG/crop/201605/2016-lamborghini-aventado_600x0w.jpg',
        'visible'=>1,
        'created_at'=> new DateTime,
        'updated_at'=>new DateTime,
        'category_id'=>2
      ]
    );
    Product::insert($data);
  }

}
