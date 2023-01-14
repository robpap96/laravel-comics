<?php

use Illuminate\Support\Facades\Route;

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

    $comics = config("comics");
    $others = [
        [
        "service" => "DIGITAL COMICS",
        "image" => "resources/img/buy-comics-digital-comics.png",
        ],
        [
        "service" => "DC MERCHANDAISE",
        "image" => "resources/img/buy-comics-merchandise.png",
        ],
        [
            "service" => "SUBSCRIPTION",
            "image" => "resources/img/buy-comics-subscriptions.png",
        ],
        [
            "service" => "COMIC SHOP LOCATOR",
            "image" => "resources/img/buy-comics-shop-locator.png",
        ],
        [
            "service" => "DC POWER VISA",
            "image" => "resources/img/buy-dc-power-visa.svg",
        ],
    ];

    return view('home', compact('comics', 'others'),);
})->name('home');
