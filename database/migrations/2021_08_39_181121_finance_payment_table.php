<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FinancePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('finance_id')->unsigned();
            $table->string('type')->comment('Taksit Tipi Ödeme Öncesimi-Sonrasımı');
            $table->dateTime('payment_date')->comment('Ödeme Tarihi')->nullable(true);
            $table->integer('number_of_payments')->comment('Taksit Sayısı');
            $table->boolean('paid')->default(false)->comment('Taksit ödendi mi');
            $table->text('description')->comment('Açıklama')->nullable(true);

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('finance_id')->references('id')->on('finance')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finance_payment');
    }
}
