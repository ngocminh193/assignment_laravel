<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(),
        'content'  => $faker->paragraph(5),
        'like' => 0,
        'view'=>0,
        'user_id' => $faker->randomDigit,
        'category_id'=>$faker->randomDigit,
    ];
});
