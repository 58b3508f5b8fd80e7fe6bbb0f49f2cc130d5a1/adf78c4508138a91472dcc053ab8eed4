<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_id')->unique();
            $table->string('title');
            $table->string('country');
            $table->string('state');
            $table->string('lga')->nullable();
            $table->string('criteria');
            $table->integer('experience');
            $table->enum('qualification',['B.Sc','B.Tech','B.Eng','M.Sc']);
            $table->integer('salary_from');
            $table->integer('salary_to');
            $table->timestamp('post_at')->nullable();
            $table->timestamp('close_at')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
