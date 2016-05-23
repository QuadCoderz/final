<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomReservationMig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->time('starting_time');
            $table->time('ending_time');
            $table->integer('people_num');
            $table->boolean('projector');
            $table->string('email');
            $table->boolean('confirm');
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
        Schema::drop('room_reservation');
    }
}
