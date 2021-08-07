<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fileable = 
        ['productName','productImg','Category','selectQuantity','selectQuantity2','selectQuantity3','price1','price2','price3'];
}
