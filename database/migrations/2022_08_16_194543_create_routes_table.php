<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->text("origin");
            $table->text("finalDestination");
            $table->integer("busId");
            $table->integer("driverId");
            $table->text("routeSlug");
            $table->datetime("departureDateTime");
            $table->integer("capacity");
            $table->integer("actualCarriage");
            $table->integer("ratePerSeat");
            $table->integer("userId");
            $table->id();
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
        Schema::dropIfExists('routes');
    }
}
