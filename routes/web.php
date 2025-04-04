<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Hello laravel</h1>';
});

Route::get('/{name}', function (string $name) {
    return '<h1>Hello '.$name.'</h1>';
});