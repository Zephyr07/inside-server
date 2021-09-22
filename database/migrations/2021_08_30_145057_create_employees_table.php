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
            $table->string('last_name')->nullable();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('phone')->nullable();
            $table->string('location');
            $table->integer('ip_phone')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id')->unsigned()->index()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('sup_id')->unsigned()->index()->nullable();
            $table->foreign('sup_id')->references('id')->on('employees');
            $table->integer('direction_id')->unsigned()->index();
            $table->foreign('direction_id')->references('id')->on('directions');
            $table->unique(['user_id', 'sup_id']);
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
