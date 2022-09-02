<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHotelBookingesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hotel_bookinges', function (Blueprint $table) {
            $table->id('hotel_id');
            $table->string('hotel_name',30);
            $table->enum('hotel_type',["lowclass","middelclass","topclass"]);
            $table->enum('hotel_roomtype',["single","double","normal","laxrey"]);
            $table->date('hotel_room_bookingDate');
            $table->date('hotel_room_checkoutDate');
            // $table->string('hotel_rooms_image');
            // $table->string('hotel_city_id',30);
            // $table->string('hotel_address',50);
            // $table->boolean('hotel_statuse')->default(0);
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
        Schema::dropIfExists('tbl_hotel_bookinges');
    }
}
