<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaufs', function (Blueprint $table) {
            $table->bigIncrements('k_id');
            $table->date('bezahldatum');
            $table->date('kaufdatum');
            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users');
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
        Schema::dropIfExists('kaufs');
    }
}
