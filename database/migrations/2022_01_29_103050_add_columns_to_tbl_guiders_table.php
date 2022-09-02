<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTblGuidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_guiders', function (Blueprint $table) {
            $table->string('guider_countery')->after('guider_gender');
            $table->string('guider_city')->after('guider_gender');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_guiders', function (Blueprint $table) {
            //
        });
    }
}
