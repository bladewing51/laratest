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
    $words = [
        [
            'id' => 1,
            'test' => 'Checking Identification'
        ],
        [
            'id' => 2,
            'test' => 'Loading Parameters'
        ],
        [
            'id' => 3,
            'test' => 'Syncing Database'
        ],
        [
            'id' => 4,
            'test' => 'Creating Tokens'
        ],
        [
            'id' => 5,
            'test' => 'Pinging Active Hosts'
        ],
        [
            'id' => 6,
            'test' => 'Looking For Targets...ABORT!'
        ],
        [
            'id' => 7,
            'test' => 'Creating SSL Tunnel'
        ],
        [
            'id' => 8,
            'test' => 'Checking IP Blacklist'
        ],

    ];

    return view('home', ['words' => $words]);
});
