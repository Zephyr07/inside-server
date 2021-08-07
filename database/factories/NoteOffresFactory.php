<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\NoteOffres;
use Faker\Generator as Faker;

$factory->define(NoteOffres::class, function (Faker $faker) {
    return [
        //
        'notes_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Notes::class)->id,
        'offres_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Offres::class)->id,
    ];
});
