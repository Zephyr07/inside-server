<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_directions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('direction_id')->unsigned()->index();
            $table->foreign('direction_id')->references('id')->on('directions')->onDelete('cascade');
            $table->integer('newsletter_id')->unsigned()->index();
            $table->foreign('newsletter_id')->references('id')->on('newsletters')->onDelete('cascade');
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
        Schema::dropIfExists('newsletter_directions');
    }
}
