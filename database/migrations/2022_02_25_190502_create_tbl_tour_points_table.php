<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTourPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tour_points', function (Blueprint $table) {
            $table->id('tour_point_id');
            $table->string('tour_point_name');
            $table->string('tour_point_cityID');
            // $table->foreign('tour_point_cityID')->references('city_id')->on('tbl_citys');
            $table->string('tour_point_address',30);
            $table->string('tour_point_history');
            $table->string('tour_point_img');
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
        Schema::dropIfExists('tbl_tour_points');
    }
}
