<?php

use App\Controllers\MainController;
use App\Middleware\SessionMiddleware;
use Jtech\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('index');
