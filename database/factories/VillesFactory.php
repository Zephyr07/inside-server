<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Villes;
use Faker\Generator as Faker;

$factory->define(Villes::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'statut'=>\Illuminate\Support\Arr::random(Villes::$Status),
    ];
});
