<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShippingInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_infos', function (Blueprint $table) {
            $table->integer('user_id', 20);
            $table->increments('shipping_id', 20);
            $table->varchar('first_name', 250);
            $table->varchar('last_name', 250);
            $table->text('complete_address', 1000);
            $table->big_integer('contact_number', 15);
            $table->varchar('payment_method', 250);
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
