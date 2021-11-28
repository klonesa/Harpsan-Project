<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FinancetwosImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financetwos_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('financetwos_id')->unsigned();
            $table->string('financetwos_image_path');
            $table->foreign('financetwos_id')->references('id')->on('financetwos')->onDelete('cascade');
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
        Schema::dropIfExists('financetwos_images');
    }
}