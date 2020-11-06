<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

// 头像假数据
$avatars = [
    'http://larabbs.test/public/img/s5ehp11z6s.png',
    'http://larabbs.test/public/img/Lhd1SHqu86.png',
    'http://larabbs.test/public/img/LOnMrqbHJn.png',
    'http://larabbs.test/public/img/xAuDMxteQy.png',
    'http://larabbs.test/public/img/ZqM7iaP4CR.png',
    'http://larabbs.test/public/img/NDnzMutoxX.png',
];

$factory->define(App\Models\User::class, function (Faker $faker) use ($avatars){

    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'remember_token' => Str::random(10),
        'avatar' => $faker->randomElement($avatars),
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'introduction' => $faker->sentence(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
