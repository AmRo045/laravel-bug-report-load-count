<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // withCount does not fire the retrieved event for Post model
    // $post = \App\Models\Post::withCount('comments')->first();

    // loadCount does fire the retrieved event for Post Model
    $post = \App\Models\Post::first();
    $post->loadCount('comments');

    dd('DONE! Checkout the storage/logs/laravel.log file');
});
