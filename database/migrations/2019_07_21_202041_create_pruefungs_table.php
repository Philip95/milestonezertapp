<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePruefungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruefungs', function (Blueprint $table) {
            $table->bigIncrements('p_id');

            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users');

            $table->unsignedBigInteger('f_id');
            $table->foreign('f_id')->references('f_id')->on('fragens');

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
        Schema::dropIfExists('pruefungs');
    }
}
