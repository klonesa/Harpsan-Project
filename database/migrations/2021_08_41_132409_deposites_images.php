<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepositesImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposites_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('deposites_id')->unsigned();
            $table->string('deposites_image_path');
            $table->foreign('deposites_id')->references('id')->on('deposites')->onDelete('cascade');
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
        Schema::dropIfExists('deposites_images');
    }
}