<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MovingHouse;
use Faker\Generator as Faker;

$factory->define(MovingHouse::class, function (Faker $faker) {
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
        'typeHousing' => $faker->colorName,
        'hasElevator' => $faker->boolean(),
        'needHelper' => $faker->boolean(),
        'dateToCollect' => $faker->dateTime(),
    ];
});
