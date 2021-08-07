<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('a_propos');
            $table->string('logo')->nullable(true);
            $table->integer('telephone');
            $table->integer('type_entreprises_id')->unsigned()->index()->nullable();
            $table->foreign('type_entreprises_id')->references('id')->on('type_entreprises');
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
        Schema::dropIfExists('entreprises');
    }
}
