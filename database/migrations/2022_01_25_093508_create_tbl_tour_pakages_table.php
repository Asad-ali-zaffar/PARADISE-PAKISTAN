<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTourPakagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tour_pakages', function (Blueprint $table) {
            $table->id('tour_pakage_id');
            $table->string('pakage_name',30);
            $table->integer('pakage_dayes');
            $table->integer('pakage_price');
            $table->string('pakage_description');
            $table->string('pakage_img');

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
        Schema::dropIfExists('tbl_tour_pakages');
    }
}
