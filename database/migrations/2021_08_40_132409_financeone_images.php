<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FinanceoneImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeone_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('financeone_id')->unsigned();
            $table->string('financeone_image_path');
            $table->foreign('financeone_id')->references('id')->on('financeone')->onDelete('cascade');
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
        Schema::dropIfExists('financeone_images');
    }
}