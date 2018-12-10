<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=['email','quantity', 'product_name', 'user_name', 'price', 'date'];
}
