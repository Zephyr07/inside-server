<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->unique();
            $table->string('type');
            $table->string('image')->nullable(true);
            $table->text('description');
            $table->integer('sous_categories_id')->unsigned()->index()->nullable();
            $table->foreign('sous_categories_id')->references('id')->on('sous_categories')->onDelete('set null');
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
        Schema::dropIfExists('offres');
    }
}
