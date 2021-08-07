<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->unique();
            $table->string('image')->nullable();
            $table->text('description');
            $table->integer('categories_id')->unsigned()->index()->nullable();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('set null');
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
        Schema::dropIfExists('sous_categories');
    }
}
