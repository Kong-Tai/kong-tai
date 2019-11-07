<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Portfolio;
use App\PortfolioCategory;
use Faker\Generator as Faker;

// $factory->define(PortfolioCategory::class, function (Faker $faker) {
//     return [
//         'name' => $faker->company,
//     ];
// });

$factory->define(Portfolio::class, function (Faker $faker) {
    $title = ucwords($faker->unique()->sentence($nbWords = 2, $variableNbWords = true));
    return [
        'title'      => $title,
        'slug'       => Str::slug($title),
        'hero_image' => $faker->imageUrl(1080, 1080, $imageCategory = null, $randomise = true),
        'intro'       => $faker->paragraphs($nb = 4, $asText = true),
        'client'     => $faker->name,
        'website_url'  => 'https://www.domain.com',
        'description' =>   $faker->paragraphs($nb = 30, $asText = true),
        'workdate'   => $faker->date('Y-m-d', '1461067200'),
        'linkedin_url'     => '/portfolio',
        'twitter_url'     => '/portfolio',
        'facebook_url'     => '/portfolio',
        'user_id' => function () {
            return User::all()->random()->id;
        },
        'category_id' => function () {
            return PortfolioCategory::all()->random()->id;
        },
    ];
});
