<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRoomBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl__room_bookings', function (Blueprint $table) {
            $table->id('room_booking_id');
            $table->enum('room_booking_type',["Hotel","Local"]);
            $table->enum('room_type',["Single bed","Double bed","Laxrey"]);
            $table->date('room_checkIn_date');
            $table->date('room_checkout_date');
            $table->string('room_booking');
            // $table->unsignedBigInteger('hotel_Id');
            // $table->foreign('hotel_Id')->references('hotel_Id')->on('tbl__hotels');
            // $table->unsignedBigInteger('room_id');
            // $table->foreign('room_id')->references('room_id')->on('tbl_local_rooms');
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
        Schema::dropIfExists('tbl__room_bookings');
    }
}
