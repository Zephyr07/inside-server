<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notes_id')->unsigned()->index()->nullable();
            $table->foreign('notes_id')->references('id')->on('notes')->onDelete('set null');
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
        Schema::dropIfExists('note_entreprises');
    }
}
