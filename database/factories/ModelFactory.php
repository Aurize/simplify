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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    $name = $faker->company;

    return [
        'user_id' => \App\User::all()->random()->id,
        'name' => $name,
        'slug' => mb_strtolower(str_slug($name)),
    ];
});

$factory->define(App\Place::class, function (Faker\Generator $faker) {
    $name = $faker->sentence;

    return [
        'company_id' => \App\Company::all()->random()->id,
        'name' => $name,
        'slug' => mb_strtolower(str_slug($name)),
    ];
});

$factory->define(App\Offer::class, function (Faker\Generator $faker) {
    $name = $faker->sentence;

    return [
        'place_id' => \App\Place::all()->random()->id,
        'category_id' => \App\Category::all()->random()->id,
        'name' => $name,
        'slug' => mb_strtolower(str_slug($name)),
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {
    $name = $faker->word;

    return [
        'offer_id' => \App\Offer::all()->random()->id,
        'name' => $name,
    ];
});

$factory->define(App\Review::class, function (Faker\Generator $faker) {
    return [
        'offer_id' => \App\Offer::all()->random()->id,
        'rate' => $faker->numberBetween(1,10),
        'title' => $faker->sentence,
        'comment' => $faker->paragraph,
    ];
});
