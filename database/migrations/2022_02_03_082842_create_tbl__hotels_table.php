<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl__hotels', function (Blueprint $table) {
            $table->id('hotel_id');
            $table->string('hotel_name',30);
            $table->string('hotel_address',30);
            $table->string('hotel_cityName',30);
            $table->text('hotel_img');
            // $table->unsignedBigInteger('hotel_img');
            // $table->foreign('hotel_img')->references('image_Id')->on('tbl_images');
            $table->integer('hotel_contact_number');
            $table->enum('hotel_type',["one","two","Three","four","five","six","seven"]);
            $table->boolean('hotel_status')->default(0);
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
        Schema::dropIfExists('tbl__hotels');
    }
}
