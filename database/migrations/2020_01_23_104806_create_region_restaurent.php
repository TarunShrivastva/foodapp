<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionRestaurent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region_restaurent', function (Blueprint $table) {
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('restaurent_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('restaurent_id')->references('id')->on('restaurents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region_restaurent');
    }
}
