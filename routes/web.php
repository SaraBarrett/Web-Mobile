<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/hello_world/{name}', function($name){
    return '<h1>Hello '.$name.'</h1>';
});

