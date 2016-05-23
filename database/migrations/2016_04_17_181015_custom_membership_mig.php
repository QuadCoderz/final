<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomMembershipMig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_membership', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('membership_id');
            $table->string('feature_1');
            $table->string('feature_2');
            $table->string('feature_3');
            $table->string('feature_4');
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
        Schema::drop('custom_membership');
    }
}
