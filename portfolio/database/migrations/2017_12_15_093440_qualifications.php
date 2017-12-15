<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Qualifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id_qualification');
            $table->integer('id_user')->unsigned();
            $table->integer('start_date');
            $table->integer('end_date');
            $table->string('diploma');
            $table->string('establishment');
            $table->string('zip_code');
            $table->string('city');
            $table->timestamps();
            $table->foreign('id_user')->references('id_user')->on('user');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}
