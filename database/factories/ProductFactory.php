<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'name' => $faker->word(),
        'code' => uniqid(),
        'description' => $faker->sentence(2, true),
        'category_id' => rand(1, 4),
        'expiration' => "2018-11-11",
        'is_visible' => 1
    ];
});
