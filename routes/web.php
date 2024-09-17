<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'liana', data: ['products' => [
        ["name" => "апельсин", "cost" => 5000, "amount" => 27],
        ["name" => "банан", "cost" => 120000, "amount" => 7],
        ["name" => "персик", "cost" => 70000, "amount" => 0],
    ]]);
});


Route::get('/welcome', function () {
    return view(view: 'welcome');
});
