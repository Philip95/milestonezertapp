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
            $table->foreign('user_id')->references('id')->on('users');
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
