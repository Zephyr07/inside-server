<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Offres;
use Faker\Generator as Faker;

$factory->define(Offres::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'type'=>$faker->text(10),
        'description'=>$faker->text(50),
        'sous_categories_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\SousCategories::class)->id,
        //'image'=> FactoryHelper::fakeFile($faker,'categories/picture'),
        'statut'=>\Illuminate\Support\Arr::random(Offres::$Status),
    ];
});
