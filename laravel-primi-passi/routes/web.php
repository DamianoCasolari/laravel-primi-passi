<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'first_name' => "Damiano",
        'last_name' => "Casolari",
        'description' => "In a few years I will be a web developer "

    ];


    return view('home', $data);
});

Route::get('/about-me', function () {
    $data = [

        'description' => "I started studying programming languages ​​as self taught since September 2022, currently student of boolean academy since january 2023",
        'date' => "22/05/2023",

    ];


    return view('about-me', $data);
});