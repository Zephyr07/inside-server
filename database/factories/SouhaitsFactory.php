<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Souhaits;
use Faker\Generator as Faker;

$factory->define(Souhaits::class, function (Faker $faker) {
    return [
        //
        'quantite'=>$faker->numberBetween(5,100),
        'clients_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Clients::class)->id,
        'prix_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\PrixOffres::class)->id,
    ];
});
