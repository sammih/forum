<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thread;
use App\User;
use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'thread_id' => function () {
            return factory(Thread::class)->create()->id;
        },

        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        
        'body' => $faker->sentence
    ];
});
