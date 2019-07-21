<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndikatorensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikatorens', function (Blueprint $table) {
            $table->bigIncrements('i_id');
            $table->string('indikatorenNr');
            $table->string('beschreibung');
            $table->integer('nummer');
            $table->string('link');
            $table->unsignedBigInteger('e_id');
            $table->foreign('e_id')->references('e_id')->on('elementes');

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
        Schema::dropIfExists('indikatorens');
    }
}
