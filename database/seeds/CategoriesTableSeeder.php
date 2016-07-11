<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
  public function run()
  {
    //Creacion de elementos de categoria
    $data = array(
      [
        'name'=>'Super Heroes',
        'slug'=>'super heroes',
        'description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
        'color'=>"#440022"
      ],
      [
        'name'=>'Geek',
        'slug'=>'geek',
        'description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor',
        'color'=>"#445500"
      ]
    );

    Category::insert($data);
  }

}
