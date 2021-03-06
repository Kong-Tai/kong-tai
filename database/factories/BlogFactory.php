<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use App\Reply;
use App\Comment;
use App\PostImage;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'     => $faker->name,
        'body' => $faker->paragraphs($nb = 4, $asText = true),
        'user_id' => function () {
            return User::all()->random()->id;
        },
    ];
});

$factory->define(PostImage::class, function (Faker $faker) {
    return [
        'post_image_caption'     => $faker->name,
        'post_image_path' => $faker->imageUrl(1080, 1080, $imageCategory = null, $randomise = true),
        'post_id' => function () {
            return Post::all()->random()->id;
        },
    ];
});

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return User::all()->random()->id;
        },
        'post_id' => function () {
            return Post::all()->random()->id;
        },
        'body' => $faker->paragraphs($nb = 4, $asText = true),
    ];
});

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return User::all()->random()->id;
        },
        'comment_id' => function () {
            return Comment::all()->random()->id;
        },
        'body' => $faker->paragraphs($nb = 4, $asText = true),
    ];
});
