<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Helpers\FactoryHelper;
use App\Paiements;
use Faker\Generator as Faker;

$factory->define(\App\Paiements::class, function (Faker $faker) {
    return [
        //
        'mode_paiement'=>$faker->text(20),
        'code_transaction'=>$faker->text(20),
        'montant'=>$faker->numberBetween(1,12),
        'date'=>$faker->dateTime("now"),
        'statut'=>\Illuminate\Support\Arr::random(Paiements::$Status),
    ];
});
