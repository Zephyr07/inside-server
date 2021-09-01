<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('type');
            $table->string('image')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('location')->nullable();
            $table->string('file')->nullable();
            $table->integer('entity_id')->unsigned()->index()->nullable();
            $table->foreign('entity_id')->references('id')->on('entities');
            $table->integer('group_id')->unsigned()->index()->nullable();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->integer('direction_id')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('newsletters');
    }
}
