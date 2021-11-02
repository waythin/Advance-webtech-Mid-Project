<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->increments('Seeker_id');
            $table->string('Name',50);
            $table->string('Username',50);
            $table->string('Email',50);
            $table->string('Phone',50);
            $table->string('Gender',50);
            $table->string('Dob',50);
            $table->string('NID',50);
            $table->string('Picture',50);
            $table->string('Password',50);
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
        Schema::dropIfExists('seekers');
    }
}
