<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTblHealthCareCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_health_care_center', function (Blueprint $table) {
            $table->string('health_care_center_img')->after('health_care_center_address');
            $table->string('health_care_discription')->after('health_care_center_address');
            $table->unsignedBigInteger('health_care_center_cityID')->after('health_care_center_address');
            $table->foreign('health_care_center_cityID')->references('city_id')->on('tbl_citys');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_health_care_center', function (Blueprint $table) {
            //
        });
    }
}
