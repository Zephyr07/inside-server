<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Localisations;
use Faker\Generator as Faker;

$factory->define(Localisations::class, function (Faker $faker) {
    return [
        //
        'quartier'=>$faker->text(20),
        'information_supplementaire'=>$faker->text(50),
        'longitude'=>$faker->numberBetween(0,10),
        'latitude'=>$faker->numberBetween(0,10),
        'entreprise_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Entreprises::class)->id,
        'ville_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Villes::class)->id,
    ];
});
