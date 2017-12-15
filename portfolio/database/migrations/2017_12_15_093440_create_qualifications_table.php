<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
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
            $table->integer('id')->unsigned();
            $table->date('start_date',4); //change type with year
            $table->date('end_date',4); //change type with year
            $table->string('diploma');
            $table->string('establishment');
            $table->string('zip_code');
            $table->string('city');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
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
