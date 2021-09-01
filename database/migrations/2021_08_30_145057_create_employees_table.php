<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('title');
            $table->string('email');
            $table->integer('phone');
            $table->string('location');
            $table->integer('ip_phone');
            $table->string('image');
            $table->integer('user_id')->unsigned()->index()->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('sup_id')->unsigned()->index()->nullable();
            $table->foreign('sup_id')->references('id')->on('employees');
            $table->integer('direction_id')->unsigned()->index()->unique();
            $table->foreign('direction_id')->references('id')->on('directions');
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
        Schema::dropIfExists('employees');
    }
}
