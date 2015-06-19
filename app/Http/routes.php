<?php

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
    event(new \App\User([
        'name' => 'Bob', 'age' => 30
    ]));
});