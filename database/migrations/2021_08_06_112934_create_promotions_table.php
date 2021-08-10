<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('priorite');
            $table->string('titre');
            $table->string('image')->nullable();
            $table->text('description');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->integer('entreprises_id')->unsigned()->index()->nullable();
            $table->foreign('entreprises_id')->references('id')->on('entreprises')->onDelete('set null');
            $table->string('statut')->default('new');
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
        Schema::dropIfExists('promotions');
    }
}
