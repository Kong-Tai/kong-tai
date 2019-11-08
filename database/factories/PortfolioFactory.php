<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Portfolio;
use App\PortfolioGallery;
use App\PortfolioCarousel;
use App\PortfolioCategory;
use Faker\Generator as Faker;

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

$factory->define(PortfolioCarousel::class, function (Faker $faker) {
    return [
        'carousel_image' => $faker->imageUrl(1080, 1080, $imageCategory = null, $randomise = true),
        'portfolio_id' => function () {
            return Portfolio::all()->random()->id;
        },
    ];
});

$factory->define(PortfolioGallery::class, function (Faker $faker) {
    return [
        'caption'     => $faker->name,
        'gallery_image' => $faker->imageUrl(1080, 1080, $imageCategory = null, $randomise = true),
        'portfolio_id' => function () {
            return Portfolio::all()->random()->id;
        },
    ];
});
