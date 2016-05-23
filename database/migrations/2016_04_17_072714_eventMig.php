<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventMig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('desc');
            //event_description
            $table->string('imagePath');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->time('starting_time');
            $table->time('ending_time');
            $table->float('fees');
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
        Schema::drop('event');
    }
}
