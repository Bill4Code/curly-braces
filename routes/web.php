<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.page');
})->name('website');
