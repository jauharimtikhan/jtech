<?php

use App\Controllers\MainController;
use App\Middleware\SessionMiddleware;
use Jtech\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');
