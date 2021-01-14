<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->increments('idclass');
            $table->integer('idcategories');
            $table->string('name');
            $table->string('slug');
            $table->string('namemitra')->nullable();
            $table->text('descriptionmitra')->nullable();
            $table->string('imagesmitra')->nullable();
            $table->string('url_imagesmitra')->nullable();
            $table->string('instructor');
            $table->string('imagesinstructor');
            $table->string('url_imagesinstructor');
            $table->string('roleinstructor');
            $table->string('price');
            $table->integer('rating');
            $table->string('duration');
            $table->string('images');
            $table->string('url_images');
            $table->string('demo')->nullable();
            $table->string('url_demo');
            $table->string('tutor');
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class');
    }
}
