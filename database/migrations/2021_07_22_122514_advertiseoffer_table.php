<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdvertiseofferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertiseoffers', function (Blueprint $table) 
        {
            $table->id();
            $table->string('image');
            $table->string('cmd');
            $table->string('add');
            $table->string('business');
            $table->string('amount');
            $table->string('discount_amount');
            $table->string('currency_code');
            $table->string('return');
            $table->string('cancel_return');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertiseoffers');
    }
}
