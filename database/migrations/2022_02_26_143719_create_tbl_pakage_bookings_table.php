<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPakageBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pakage_bookings', function (Blueprint $table) {
            $table->id('pakage_booking_id');
            $table->string('pakage_name');
            $table->string('pakage_days');
            $table->string('pakage_price');
            $table->string('pakage_id');
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
        Schema::dropIfExists('tbl_pakage_bookings');
    }
}
