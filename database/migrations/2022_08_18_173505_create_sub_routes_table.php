<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_routes', function (Blueprint $table) {
            $table->id();
            $table->integer("routeId");
            $table->integer("ratePerSeat");
            $table->integer("parentBranch");
            $table->text("currency");
            $table->integer("busId");
            $table->integer("driverId");
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
        Schema::dropIfExists('sub_routes');
    }
}
