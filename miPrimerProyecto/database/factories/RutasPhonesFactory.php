<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\RutasPhones;
use Faker\Generator as Faker;

$factory->define(RutasPhones::class, function (Faker $faker) {
    return [
        'tittle' => $faker->name, 
        'description' => $faker->sentence, 
        'rutaImg' => $faker->image('public',355,700, null, false)
    ];
});
