<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Clients;
use Faker\Generator as Faker;

$factory->define(Clients::class, function (Faker $faker) {
    return [
        //
        'nom'=>$faker->text(20),
        'genre'=>$faker->text(5),
        //'image'=> FactoryHelper::fakeFile($faker,'categories/picture'),
        'telephone'=>$faker->numberBetween(200000000,999999999),
        'user_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\User::class)->id,
        'statut'=>\Illuminate\Support\Arr::random(Clients::$Status),
    ];
});
