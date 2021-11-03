<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->integer('PlaneId');
            $table->integer('FromAirportId');
            $table->integer('ToAirportId');
            $table->dateTime('DepartureTime');
            $table->dateTime('ArrivalTime');
            $table->string('Status')->default('Laukiamas');
            $table->integer('PassengersCount');
            $table->decimal('TicketsPrice', 10, 2);
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
        Schema::dropIfExists('flights');
    }
}
