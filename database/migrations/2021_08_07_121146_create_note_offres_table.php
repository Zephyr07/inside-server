<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_offres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offres_id')->unsigned()->index()->nullable();
            $table->foreign('offres_id')->references('id')->on('offres')->onDelete('set null');
            $table->integer('notes_id')->unsigned()->index()->nullable();
            $table->foreign('notes_id')->references('id')->on('notes')->onDelete('set null');
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
        Schema::dropIfExists('note_offres');
    }
}
