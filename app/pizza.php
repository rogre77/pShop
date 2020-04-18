<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pizza extends Model
{
  //protected $table = 'tableName';
  protected $casts = [
    'toppings' => 'array'
  ];
}
