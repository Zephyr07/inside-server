<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('type_abonnements_id')->unsigned()->index()->nullable();
            $table->foreign('type_abonnements_id')->references('id')->on('type_abonnements')->onDelete('set null');
            $table->integer('paiements_id')->unsigned()->index()->nullable();
            $table->foreign('paiements_id')->references('id')->on('paiements')->onDelete('set null');
            $table->string('statut')->default('active');
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
        Schema::dropIfExists('abonnements');
    }
}
