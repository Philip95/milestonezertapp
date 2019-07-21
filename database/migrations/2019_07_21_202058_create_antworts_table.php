<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntwortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antworts', function (Blueprint $table) {
            $table->bigIncrements('a_id');

            $table->unsignedBigInteger('f_id');
            $table->foreign('f_id')->references('f_id')->on('fragens');

            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users');

            $table->string('antwort');
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
        Schema::dropIfExists('antworts');
    }
}
