<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/compilation', function () {
    return view('compilation');
})->name('compilation');

Route::get('/portfolio1', function () {
    return view('portfolio1');
})->name('portfolio1');

Route::get('/portfolio2', function () {
    return view('portfolio2');
})->name('portfolio2');

Route::get('/portfolio3', function () {
    return view('portfolio3');
})->name('portfolio3');

Route::get('/portfolio4', function () {
    return view('portfolio4');
})->name('portfolio4');