<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idusers');	     
            $table->string('name');
            $table->enum('role',['a','c','b','m','i','u']); //admin, class,bussiness,mitra,instructur,user
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('logintoken')->nullable();
            $table->text('image')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('mobile')->nullable();
            $table->string('tempatlahir')->nullable();
            $table->date('date_born')->nullable();
            $table->string('jobrole')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('users');
    }
}
