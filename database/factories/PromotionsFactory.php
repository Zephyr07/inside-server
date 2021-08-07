<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Promotions;
use Faker\Generator as Faker;

$factory->define(Promotions::class, function (Faker $faker) {
    return [
        //
        'priorite'=>$faker->numberBetween(1,20),
        'date_debut'=>$faker->dateTime('now'),
        'date_fin'=>$faker->dateTime('now'),
        'offres_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Offres::class)->id,
        'statut'=>\Illuminate\Support\Arr::random(Promotions::$Status)
    ];
});
