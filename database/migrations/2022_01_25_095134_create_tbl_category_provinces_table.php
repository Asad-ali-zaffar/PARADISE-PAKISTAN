<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategoryProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_provinces', function (Blueprint $table) {
            $table->id('province_id');
            $table->string('province_name',30);
            $table->binary('province_img');
            $table->integer('province_divisions');
            $table->integer('province_tour_pointsID');
            $table->integer('province_cityID');
            $table->integer('province_hotelID');
            $table->integer('province_localroomID');
            $table->integer('province_health_centerID');
            $table->integer('province_tour_guiderID');
            $table->integer('province_divisionID');
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
        Schema::dropIfExists('tbl_category_provinces');
    }
}
