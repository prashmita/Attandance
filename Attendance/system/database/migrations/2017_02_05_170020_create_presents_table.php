<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presents',function(Blueprint $table){
            $table->increments('id');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->time('present_hours');
            $table->string('check_in_method');
            $table->string('check_out_method');
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
        Schema::drop('presents');
    }
}
