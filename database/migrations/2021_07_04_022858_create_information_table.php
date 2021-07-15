<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->string('tittle');
            $table->string('pref');
            $table->string('city');
            $table->text('URL');
            $table->unsignedBigInteger('TEL')->unsigned();
            $table->text('about');
            $table->time('open');
            $table->time('close');
            $table->string('image')->default('');
            $table->boolean('ParkingCar');
            $table->boolean('ParkingBicycles');
            $table->integer('category_id')->unsigned();
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
        Schema::dropIfExists('information');
    }
}
