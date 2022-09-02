<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategoryTourPakegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_tour_pakeges', function (Blueprint $table) {
            $table->id('category_pakege_id');
            $table->string('tour_pakege_name',30);
            $table->string('pakege_description');
            $table->unsignedBigInteger('tour_pakageID');
            $table->foreign('tour_pakageID')->references('tour_pakage_id')->on('tbl_tour_pakages');
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
        Schema::dropIfExists('tbl_category_tour_pakeges');
    }
}
