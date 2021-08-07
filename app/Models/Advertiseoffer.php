<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiseoffer extends Model
{
    use HasFactory;

    protected $timestamps = false;

    protected $table = "advertiseoffers";

    protected $fileable = ['image','cmd','add','business','amount','discount_amount','currency_code','return','cancel_return'];
    
}
