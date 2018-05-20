<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resume_id');
            $table->string('title');
            $table->string('institution');
            $table->enum('qualification',['B.Sc','B.Tech','B.Eng','M.Sc']);
            $table->text('description');
            $table->timestamp('started_at')->useCurrent();
            $table->timestamp('finished_at')->useCurrent();
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
        Schema::dropIfExists('education');
    }
}
