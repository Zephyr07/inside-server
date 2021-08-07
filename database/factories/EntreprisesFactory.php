<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Entreprises;
use Faker\Generator as Faker;

$factory->define(Entreprises::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'a_propos'=>$faker->text(50),
        'telephone'=>$faker->numberBetween(200000000,999999999),
        'type_entreprises_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\TypeEntreprises::class)->id,
        //'logo'=> FactoryHelper::fakeFile($faker,'categories/picture'),
        'statut'=>\Illuminate\Support\Arr::random(Entreprises::$Status),
    ];
});
