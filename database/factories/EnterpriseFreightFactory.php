<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EnterpriseFreight;
use Faker\Generator as Faker;

$factory->define(EnterpriseFreight::class, function (Faker $faker) {
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
        'weight' => $faker->colorName,
        'cnpjSender' => $faker->colorName,
        'cnpjRecipient' => $faker->colorName,
        'quantityItems' => $faker->colorName,
        'collectObservations' => $faker->colorName,
        'merchandiseObservations' => $faker->colorName,
        'paidAtOrigin'=> $faker->boolean(),
        'dateToCollect'=> $faker->colorName
    ];
});
