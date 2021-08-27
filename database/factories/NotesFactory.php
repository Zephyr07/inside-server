<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Notes;
use Faker\Generator as Faker;

$factory->define(Notes::class, function (Faker $faker) {
    return [
        //
        'commentaire'=>$faker->text(100),
        'valeur'=>$faker->numberBetween(1,5),
        'user_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\User::class)->id,
        'statut'=>\Illuminate\Support\Arr::random(Notes::$Status)
    ];
});
