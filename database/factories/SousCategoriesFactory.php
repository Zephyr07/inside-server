<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\SousCategories;
use Faker\Generator as Faker;

$factory->define(SousCategories::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'description'=>$faker->text(50),
        'categories_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Categories::class)->id,
        //'image'=> FactoryHelper::fakeFile($faker,'categories/picture'),
        'statut'=>\Illuminate\Support\Arr::random(SousCategories::$Status),
    ];
});
