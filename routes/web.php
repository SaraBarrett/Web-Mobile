<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'welcome'])->name('welcome');

Route::get('/home', [IndexController::class, 'home'])->name('homepage');

Route::get('/users', function () {
    return view('users.all_users');
})->name('users.all');

Route::get('/add_user', function(){
    return view('users.add_user');
})->name('users.add');

Route::get('/hello_world/{name}', function($name){
    return '<h1>Hello '.$name.'</h1>';
});



//rota de fallback, onde o user cai quando clica numa rota que não está registada
Route::fallback(function(){
  return view('utils.fallback');
});
