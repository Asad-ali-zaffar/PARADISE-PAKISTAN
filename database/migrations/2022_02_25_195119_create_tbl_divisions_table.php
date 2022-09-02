<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_divisions', function (Blueprint $table) {
            $table->id('division_id');
            $table->string('division_name',30);
            $table->unsignedBigInteger('division_cityID');
            $table->foreign('division_cityID')->references('city_id')->on('tbl_citys');
            $table->unsignedBigInteger('division_tour_guiderID');
            $table->foreign('division_tour_guiderID')->references('guider_id')->on('tbl_guiders');
            $table->unsignedBigInteger('division_tour_pointID');
            $table->foreign('division_tour_pointID')->references('tour_point_id')->on('tbl_tour_points');
            $table->unsignedBigInteger('division_hotelID');
            $table->foreign('division_hotelID')->references('hotel_id')->on('tbl__hotels');
            $table->unsignedBigInteger('division_local_roomID');
            $table->foreign('division_local_roomID')->references('room_id')->on('tbl_local_rooms');
            $table->unsignedBigInteger('division_health_care_centerID');
            $table->foreign('division_health_care_centerID')->references('care_center_Id')->on('tbl_health_care_center');
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
        Schema::dropIfExists('tbl_divisions');
    }
}
