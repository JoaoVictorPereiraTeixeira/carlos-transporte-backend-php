<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CommonFreight;
use Faker\Generator as Faker;

$factory->define(CommonFreight::class, function (Faker $faker) {
    return [
        'requesterName' => $faker->colorName,
        'requesterMainTelephone' => $faker->phoneNumber,
        'requesterSecondaryTelephone' => $faker->phoneNumber,
        'dateSolicitation' => $faker->dateTime(),
        'originCep' => $faker->colorName,
        'originCity' => $faker->colorName,
        'originAddress' => $faker->colorName,
        'originDistrict' =>  $faker->colorName,
        'originNumber' =>  $faker->colorName,
        'destinyCep' =>  $faker->colorName,
        'destinyAddress'  => $faker->colorName,
        'destinyDistrict' => $faker->colorName,
        'needHelper' => $faker->boolean(),
        'merchandiseObservations' => $faker->colorName
    ];
});
