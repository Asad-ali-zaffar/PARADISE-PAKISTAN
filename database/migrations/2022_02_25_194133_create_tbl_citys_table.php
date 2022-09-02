<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_citys', function (Blueprint $table) {
            $table->id('city_id');
            $table->string('city_name',30);
            $table->unsignedBigInteger('city_tourPointsID');
            $table->foreign('city_tourPointsID')->references('tour_point_id')->on('tbl_tour_points');
            $table->unsignedBigInteger('city_tour_guiderID');
            $table->foreign('city_tour_guiderID')->references('guider_id')->on('tbl_guiders');
            $table->unsignedBigInteger('city_local_roomID');
            $table->foreign('city_local_roomID')->references('room_id')->on('tbl_local_rooms');
            $table->unsignedBigInteger('city_hotelID');
            $table->foreign('city_hotelID')->references('hotel_id')->on('tbl__hotels');
            $table->string('city_ceare_centersID');
            // $table->foreign('city_ceare_centersID')->references('care_center_Id')->on('tbl_health_care_center');
            $table->string('city_image');
            $table->string('city_history');
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
        Schema::dropIfExists('tbl_citys');
    }
}
