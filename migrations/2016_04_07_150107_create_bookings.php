<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->integer('pickup');
            $table->integer('dropoff');
            $table->integer('totalSeats');
            $table->timestamp('departure');
            $table->timestamp('arrival');
            $table->boolean('booked')->default(false);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pickup')->references('id')->on('pickups')->onDelete('cascade');
            $table->foreign('dropoff')->references('id')->on('pickups')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
