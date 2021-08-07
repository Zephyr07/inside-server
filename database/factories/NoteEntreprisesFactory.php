<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\NoteEntreprises;
use Faker\Generator as Faker;

$factory->define(NoteEntreprises::class, function (Faker $faker) {
    return [
        //
        'notes_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Notes::class)->id,
        'entreprises_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Entreprises::class)->id,
    ];
});
