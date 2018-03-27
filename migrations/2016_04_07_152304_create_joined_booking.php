<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinedBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joined_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bookingid');
            $table->integer('userid');
            $table->integer('seats');
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
        Schema::drop('joined_bookings');
    }
}
