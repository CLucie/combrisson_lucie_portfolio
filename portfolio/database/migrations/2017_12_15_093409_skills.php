<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Skills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id_skill');
            $table->integer('id_user')->unsigned();
            $table->string('client_languages');
            $table->string('server_languages');
            $table->string('client_framework');
            $table->string('server_framework');
            $table->string('data');
            $table->string('library');
            $table->string('web_server');
            $table->string('tools');
            $table->string('cms');
            $table->string('software');
            $table->string('mooc');
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
        Schema::dropIfExists('skills');
    }
}
