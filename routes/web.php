<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('health-check', function () {
    return [
        'version' => 1.3
    ];
});

Route::get('/users', function () {

    $result = [];

    Cache::increment('visitor', 1);
    $visitor = Cache::get('visitor');

    foreach (range(0, 200) as $user) {
        $faker =  Faker::create();

        $result[] = [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'city' => $faker->city
        ];
    }

    return [
        'request' => $visitor,
        'data' => $result
    ];

});
