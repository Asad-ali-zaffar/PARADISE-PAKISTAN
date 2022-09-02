<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGuidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_guiders', function (Blueprint $table) {
            $table->id('guider_id');
            $table->string('guider_name',30);
            $table->string('guider_email',100);
            $table->string('guider_password',256);
            $table->date('guider_dob');
            $table->enum('guider_gender',["M","F","O"]);
            $table->text('guider_address',60);
            $table->string('guider_phoneNo',15);
            $table->string('guider_cnic',15);
            $table->string('guider_guide_city_name',30);
            $table->boolean('guider_status')->default(0);
            $table->string('guider_img');
            $table->string('guider_fbID_link');
            $table->string('guider_linkedin_ID_link');
            $table->string('guider_twitter_ID_link');
            $table->string('guider_skype_ID_link');
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
        Schema::dropIfExists('tbl_guiders');
    }
}
