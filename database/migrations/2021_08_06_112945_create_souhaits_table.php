<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouhaitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souhaits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantite');
            $table->integer('clients_id')->unsigned()->index()->nullable();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('set null');
            $table->integer('prix_id')->unsigned()->index()->nullable();
            $table->foreign('prix_id')->references('id')->on('prix_offres')->onDelete('set null');
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
        Schema::dropIfExists('souhaits');
    }
}
