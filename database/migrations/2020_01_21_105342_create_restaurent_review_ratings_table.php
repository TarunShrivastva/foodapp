<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurentReviewRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurent_review_ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('review');
            $table->integer('rating_id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('restaurent_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('restaurent_id')->references('id')->on('restaurents')->onDelete('cascade');
            $table->unique(['user_id','restaurent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurent_review_ratings');
    }
}
