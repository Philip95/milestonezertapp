<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonenRollesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personen_rolles', function (Blueprint $table) {
            $table->bigIncrements('pr_id');

            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users');

            $table->boolean('privatperson');
            $table->boolean('geschaeftsperson');
            $table->integer('uid');
            $table->boolean('admin');
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
        Schema::dropIfExists('personen_rolles');
    }
}
