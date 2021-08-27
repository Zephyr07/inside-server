<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Abonnements;
use Faker\Generator as Faker;

$factory->define(Abonnements::class, function (Faker $faker) {
    return [
        //
        'user_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\User::class)->id,
        'paiements_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\Paiements::class)->id,
        'type_abonnements_id'=> \App\Helpers\FactoryHelper::getOrCreate(\App\TypeAbonnements::class)->id,
        'statut'=>\Illuminate\Support\Arr::random(Abonnements::$Status),
    ];
});
