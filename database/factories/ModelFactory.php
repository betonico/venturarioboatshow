<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

<<<<<<< HEAD
/** User Factory */
=======
>>>>>>> Commit admin functions
$factory->define(RioBoatShow\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

<<<<<<< HEAD
/** Insert Factory */
$factory->define(RioBoatShow\Entities\Insert::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'cpf' => rand(1,10),
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->city,
        'phone' => $faker->phoneNumber,
        'whatsapp' => $faker->phoneNumber,
        'own_boat' => rand(1,1),
        'boat_model' => $faker->name,
        'boat_interest' => $faker->name,
    ];
});

=======
>>>>>>> Commit admin functions

