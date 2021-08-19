<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->integer('amount')->comment('Üyenin çekeceği miktar');
            $table->integer('first_payment_amount')->comment('Ödeme öncesi taksit miktarı');
            $table->integer('get_month')->comment('paranın alınacağı ay');
            $table->integer('amount_payable')->comment('Üyenin ödeyeceği miktar');
            $table->integer('remaining_amount')->comment('Kalan ödeme miktarı');
            $table->integer('last_payment_amount')->comment('Ödeme sonrası taksit miktarı');
            $table->integer('number_of_payments')->comment('Taksit sayısı');
            $table->integer('participation_fee')->comment('Katılım masrafı');
            $table->integer('deposit')->comment('Depozito');
            $table->text('description')->comment('Açıklama');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('finance');
    }
}
