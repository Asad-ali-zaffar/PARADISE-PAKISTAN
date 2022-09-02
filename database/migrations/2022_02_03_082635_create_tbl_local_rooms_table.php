<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLocalRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_local_rooms', function (Blueprint $table) {
            $table->id('room_id');
            $table->string('room_ownerName',30);
            $table->string('room_ownerNo',15);
            $table->string('room_address',50);
            $table->integer('room_rent');
            $table->boolean('room_status')->default(0);
            $table->text('room_img');
            // $table->unsignedBigInteger('room_img');
            // $table->foreign('room_img')->references('image_Id')->on('tbl_images');
            // $table->unsignedBigInteger('city_id');
            // $table->foreign('city_id')->references('city_id')->on('tbl_citys');
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
        Schema::dropIfExists('tbl_local_rooms');
    }
}
