<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\TypeEntreprises;
use Faker\Generator as Faker;

$factory->define(\App\TypeEntreprises::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'description'=>$faker->text(100),
        'statut'=>\Illuminate\Support\Arr::random(TypeEntreprises::$Status),
    ];
});
