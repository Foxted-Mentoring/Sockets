<?php

use App\Events\UserRegistered;
use App\User;

/**
 * Open this route in your browser to listen to the web socket.
 */
Route::get('/', function () {
    return view('app');
});

/**
 * Hit this route to trigger the event that will be broadcasted via your web socket.
 */
Route::get('event', function() {
    $faker = Faker\Factory::create();

    event(new UserRegistered(new User([
        'name' => $faker->name, 'age' => $faker->numberBetween(18, 80)
    ])));
});