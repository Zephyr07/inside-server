<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Categories;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'description'=>$faker->text(50),
        //'image'=> FactoryHelper::fakeFile($faker,'categories/picture'),
        'statut'=>\Illuminate\Support\Arr::random(Categories::$Status),
    ];
});
