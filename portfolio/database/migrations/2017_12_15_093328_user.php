<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('name');
            $table->string('first_name');
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('phone_number');
            $table->string('email');
            $table->date('birth_date');
            $table->date('password');
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
        Schema::dropIfExists('user');
    }
}
