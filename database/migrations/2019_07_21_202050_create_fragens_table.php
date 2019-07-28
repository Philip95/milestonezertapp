<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFragensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fragens', function (Blueprint $table) {
            $table->bigIncrements('f_id');
            $table->string('frage');
            $table->unsignedBigInteger('i_id');
            $table->foreign('i_id')->references('i_id')->on('indikatorens');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fragens');
    }
}
