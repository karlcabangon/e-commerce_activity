<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderedProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('ordered_products', function (Blueprint $table) {
            $table->increments('product_id', 20);
            $table->integer('user_id', 20);
            $table->varchar('product_name', 250);
            $table->text('product_description', 1000);
            $table->small_integer('product_price', 255);
            $table->timestamps('updated_at');
            $table->timestamps('created_at');
            $table->rememberToken();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
