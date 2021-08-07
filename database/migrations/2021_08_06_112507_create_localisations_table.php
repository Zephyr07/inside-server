<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quartier');
            $table->text('information_supplementaire');
            $table->double('longitude');
            $table->double('latitude');
            $table->integer('entreprises_id')->unsigned()->index()->nullable();
            $table->foreign('entreprises_id')->references('id')->on('entreprises')->onDelete('set null');
            $table->integer('villes_id')->unsigned()->index()->nullable();
            $table->foreign('villes_id')->references('id')->on('villes')->onDelete('set null');
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
        Schema::dropIfExists('localisations');
    }
}
