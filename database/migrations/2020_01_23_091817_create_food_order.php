<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_order', function (Blueprint $table) {
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_order');
    }
}
