<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVisitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_visiters', function (Blueprint $table) {
            $table->id();
            $table->string('visiter_name',60);
            $table->string('visiter_email',100);
            $table->string('visiter_password',250);
            $table->date('visiter_dob');
            $table->enum('visiter_gender',["M","F","O"]);
            $table->text('visiter_address',60);
            $table->text('visiter_country',60);
            $table->text('visiter_city',60);
            $table->string('visiter_phoneNo',15);
            $table->string('visiter_cnic',15);
            $table->string('visiter_img');
            $table->boolean('visiter_status')->default(0);
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
        Schema::dropIfExists('tbl_visiters');
    }
}
