<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransportBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transport_booking', function (Blueprint $table) {
            $table->id('transport_book_ID');
            $table->string('source_place_name',30);
            $table->string('destination_place_name',30);
            $table->timeTz('going_time');
            $table->date('going_date');
            $table->enum('transport_type',["Car","Bus","Train","Airplan"]);
            $table->integer('number_of_seats')->default(0);
            $table->enum('seat_type',["economy","business"]);
            $table->integer('transport_total_bill')->nullable();
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
        Schema::dropIfExists('tbl_transport_booking');
    }
}
