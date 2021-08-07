<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->String('productName');
            $table->String('productImg');
            $table->String('marketowner');
            $table->String('item');
            $table->String('businessname');
            $table->String('item_name');
            $table->String('amount');
            $table->String('discount_amount');
            $table->String('currency_code');
            $table->String('returnitem');
            $table->String('cancel_return');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
