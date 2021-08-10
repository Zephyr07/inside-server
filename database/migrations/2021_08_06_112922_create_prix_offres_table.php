<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrixOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prix_offres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('valeur');
            $table->integer('prix_promo')->nullable();
            $table->integer('offres_id')->unsigned()->index()->nullable();
            $table->foreign('offres_id')->references('id')->on('offres')->onDelete('set null');
            $table->integer('entreprises_id')->unsigned()->index()->nullable();
            $table->foreign('entreprises_id')->references('id')->on('entreprises')->onDelete('set null');
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
        Schema::dropIfExists('prix');
    }
}
