<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addcart extends Model
{
    use HasFactory;

    protected $table = "addcarts";

    protected $fileable = ['productName','marketowner',
                            'item','businessname','item_name','amount',
                            'discount_amount','currency_code','returnitem','cancel_return'];
}
