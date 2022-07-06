<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('Start_Time');
            $table->string('Bus_No');
            $table->string('pre_loc');
            $table->string('des_loc');
            $table->string('des_time');
            $table->string('route');
            $table->string('time_in');
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
        //
    }
}
