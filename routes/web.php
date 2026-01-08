<?php


use Jtech\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');
