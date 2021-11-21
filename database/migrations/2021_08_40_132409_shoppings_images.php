<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShoppingsImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('shoppings_id')->unsigned();
            $table->string('shoppings_image_path');
            $table->foreign('shoppings_id')->references('id')->on('shoppings')->onDelete('cascade');
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
        Schema::dropIfExists('shoppings_images');
    }
}