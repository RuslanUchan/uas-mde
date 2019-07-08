<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeteranganEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('schedule');
            $table->boolean('tenda');
            $table->boolean('catering');
            $table->boolean('sound');
            $table->boolean('lighting');
            $table->boolean('support');
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
        Schema::dropIfExists('keterangan_events');
    }
}
