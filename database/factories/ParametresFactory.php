<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Parametres;
use Faker\Generator as Faker;

$factory->define(Parametres::class, function (Faker $faker) {
    return [
        //
        'langue'=>$faker->text(20),
        'notification'=>$faker->boolean(),
        'utilisateurS_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\User::class)->id,
    ];
});
