<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home.index')->name('home');
Route::view('/trading', 'trading.index')->name('trading');
Route::view('/logistics', 'logistics.index')->name('logistics');
Route::view('/telecom', 'telecom.index')->name('telecom');