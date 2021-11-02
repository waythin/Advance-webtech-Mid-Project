<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('Post_id');
            $table->string('Post_Title',50);
            $table->string('Post_Description',500);
            $table->string('Job_Requirement',500);
            $table->string('Post_Status',500);
            $table->string('Vacancy',50);
            $table->string('Employment_Status',100);
            $table->string('Workplace',50);
            $table->string('Job_location',50);
            $table->string('Compensation',500);
            $table->string('Deadline',50);
            $table->string('Posted_By',50);
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
        Schema::dropIfExists('posts');
    }
}
