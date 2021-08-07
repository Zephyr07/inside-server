<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\TypeAbonnements;
use Faker\Generator as Faker;

$factory->define(\App\TypeAbonnements::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'duree'=>$faker->numberBetween(1,12),
        'prix'=>$faker->numberBetween(10,1200),
        'statut'=>\Illuminate\Support\Arr::random(TypeAbonnements::$Status),
    ];
});
