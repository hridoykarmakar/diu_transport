<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('stu_id');
            $table->string('email');
            $table->string('trans_id');
            $table->string('des_loc');
            $table->string('sit_num');
            $table->string('phone');
            $table->string('payment');
            $table->string('booking_stu');
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
