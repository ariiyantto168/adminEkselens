<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizclass', function (Blueprint $table) {
            $table->increments('idquizclass');
            $table->integer('idclass');
            $table->integer('idusers');
            $table->integer('idsubclass');
            $table->integer('idmateries');
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
        Schema::dropIfExists('quizclass');
    }
}
