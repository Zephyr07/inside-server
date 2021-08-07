<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\PrixOffres;
use Faker\Generator as Faker;

$factory->define(PrixOffres::class, function (Faker $faker) {
    return [
        //
        'valeur'=>$faker->numberBetween(500,100000),
        'entreprises_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Entreprises::class)->id,
        'offres_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Offres::class)->id,
    ];
});
