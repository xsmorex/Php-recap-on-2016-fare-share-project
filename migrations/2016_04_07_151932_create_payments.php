<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buyerid');
            $table->integer('bookingid');
            $table->float('paymentAmount');
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
            $table->foreign('buyerid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bookingid')->references('id')->on('bookings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
