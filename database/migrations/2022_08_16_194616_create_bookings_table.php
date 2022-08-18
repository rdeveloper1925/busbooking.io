<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer("routeId");
            $table->integer("busId");
            $table->integer("driverId");
            $table->text("currency");
            $table->integer("amountPaid")->nullable();
            $table->text("seatNumber");
            $table->boolean("bookingStatus")->default(false);
            $table->boolean("multipleBookings")->default(false);
            $table->text("customerName");
            $table->text("phoneNumber");
            $table->integer("userId");

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
        Schema::dropIfExists('bookings');
    }
}
