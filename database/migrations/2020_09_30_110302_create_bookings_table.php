<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('user_id');
            $table->text('title');
            $table->text('name');
            $table->integer('phno');
            $table->string('email');
            $table->date('start');
            $table->date('end');
            $table->integer('price');
            $table->integer('noofpeople');
            $table->integer('total');
            $table->text('content');
            $table->integer('bookable_id');
            // $table->string('bookable_type');
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
        Schema::dropIfExists('bookings');
    }
}
