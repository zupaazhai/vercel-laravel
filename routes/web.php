<?php

use Illuminate\Support\Facades\Route;
use Faker;

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

    dd(PHP_VERSION);

    // foreach (range(0, 100) as $user) {

    //     $faker = app()->make('Faker\Factory');
    //     $faker = $faker->create();

    //     $result[] = [
    //         'name' => $faker->name,
    //         'email' => $faker->email,
    //         'phone' => $faker->phoneNumber,
    //         'city' => $faker->city
    //     ];
    // }

    // return $result;

});
