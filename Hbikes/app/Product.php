<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
    $table->increments('id');
            $table->timestamps();
            $table->string('imagePath');
            $table->string('type');
            $table->string('name');
            $table->string('color');
            $table->float('weigth');
            $table->float('price');
            $table->text('description');
    */

    protected $fillable = ['imagePath','type','name','color','weight','price','description'];
}
