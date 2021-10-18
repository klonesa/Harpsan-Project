<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DuesImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dues_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dues_id')->unsigned();
            $table->string('dues_image_path');
            $table->foreign('dues_id')->references('id')->on('dues')->onDelete('cascade');
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
        Schema::dropIfExists('dues_images');
    }
}