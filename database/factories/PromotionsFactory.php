<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Promotions;
use Faker\Generator as Faker;

$factory->define(Promotions::class, function (Faker $faker) {
    return [
        //
        'titre'=>$faker->text(20),
        'description'=>$faker->text(200),
        'priorite'=>$faker->numberBetween(1,20),
        'date_debut'=>$faker->dateTimeBetween('now', '2 years'),
        'date_fin'=>$faker->dateTimeBetween('now', '2 years'),
        'entreprises_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Entreprises::class)->id,
        'statut'=>\Illuminate\Support\Arr::random(Promotions::$Status)
    ];
});
