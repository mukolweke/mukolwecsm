<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone'=>$faker->phoneNumber,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'account_status'=> 0,
    ];
});


$factory->define(App\Lead::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'source' => $faker->url,
        'description'=>$faker->paragraph,
    ];
});

//
//$factory->define(App\Email::class, function (Faker $faker) {
//    return [
//        'from_email' => $faker->unique()->safeEmail,
//        'to_email' => $faker->unique()->safeEmail,
//        'subject' => $faker->title,
//        'body'=>$faker->paragraph,
//    ];
//});

