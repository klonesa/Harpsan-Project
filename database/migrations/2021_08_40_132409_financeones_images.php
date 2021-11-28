<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FinanceonesImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeones_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('financeones_id')->unsigned();
            $table->string('financeones_image_path');
            $table->foreign('financeones_id')->references('id')->on('financeones')->onDelete('cascade');
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
        Schema::dropIfExists('financeones_images');
    }
}