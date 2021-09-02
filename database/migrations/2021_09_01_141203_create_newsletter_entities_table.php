<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_entities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entity_id')->unsigned()->index();
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->integer('newsletter_id')->unsigned()->index();
            $table->foreign('newsletter_id')->references('id')->on('newsletters')->onDelete('cascade');
            $table->unique(['newsletter_id', 'entity_id']);
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
        Schema::dropIfExists('newsletter_entities');
    }
}
