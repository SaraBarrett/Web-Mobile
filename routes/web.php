<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'welcome'])->name('welcome');
Route::get('/home', [IndexController::class, 'home'])->name('homepage');

Route::get('/users', [UserController::class, 'returnViewAllUsers'])->name('users.all');
Route::get('/add_user', [UserController::class, 'returnViewAddUser'])->name('users.add');
Route::get('/insert_user', [UserController::class, 'insertUser'])->name('users.insert');

//leva o parametro do id para carregar o objecto com todos os detalhes do User
Route::get('/users_show/{id}', [UserController::class, 'viewUser'])->name('users.show');

Route::get('/users_delete/{id}', [UserController::class, 'deleteUser'])->name('users.delete');

Route::get('/tasks', [TaskController::class, 'allTasks'])->name('tasks.all');

Route::get('/hello_world/{name}', function($name){
    return '<h1>Hello '.$name.'</h1>';
});



//rota de fallback, onde o user cai quando clica numa rota que não está registada
Route::fallback(function(){
  return view('utils.fallback');
});
