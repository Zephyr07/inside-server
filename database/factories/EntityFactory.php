<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Categories;
use Faker\Generator as Faker;

$factory->define(\App\Entity::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'address'=>$faker->text(50),
    ];
});
