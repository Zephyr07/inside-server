<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Marques;
use Faker\Generator as Faker;

$factory->define(Marques::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(5),
        //'image'=> FactoryHelper::fakeFile($faker,'categories/picture'),
        'statut'=>\Illuminate\Support\Arr::random(Marques::$Status),
    ];
});
