<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status',[0, 1, 2])->default(0)->comment('0 => Not Delivered, 1 => delivered, 2 => canceled');
            $table->unsignedBigInteger('restaurent_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('restaurent_id')->references('id')->on('restaurents')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
