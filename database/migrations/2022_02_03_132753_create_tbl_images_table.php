<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_images', function (Blueprint $table) {
            $table->id('image_Id');
            $table->string('image_name');
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('hotel_id')->on('tbl__hotels');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('room_id')->on('tbl_local_rooms');
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
        Schema::dropIfExists('tbl_images');
    }
}
