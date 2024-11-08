<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'welcome'])->name('welcome');
Route::get('/home', [IndexController::class, 'home'])->name('homepage');
Route::get('/users', [UserController::class, 'returnViewAllUsers'])->name('users.all');
//rota get porque faz um read (neste caso da view de form)
Route::get('/add_user', [UserController::class, 'returnViewAddUser'])->name('users.add');
//rota post porque lê os dados do form e envia para o servidor
Route::post('/create_user', [UserController::class, 'createUser'])->name('users.create');
Route::get('/insert_user', [UserController::class, 'insertUser'])->name('users.insert');

//leva o parametro do id para carregar o objecto com todos os detalhes do User
Route::get('/users_show/{id}', [UserController::class, 'viewUser'])->name('users.show');

Route::get('/users_delete/{id}', [UserController::class, 'deleteUser'])->name('users.delete');


//Tasks
Route::get('/tasks', [TaskController::class, 'allTasks'])->name('tasks.all');
Route::get('/add_task', [TaskController::class, 'returnViewAddTask'])->name('tasks.add');
Route::post('/create_task', [TaskController::class, 'createTask'])->name('tasks.create');

//rota para ver/editar tasks
Route::get('/show_task/{id}', [TaskController::class, 'returnViewShowTask'])->name('tasks.show');

Route::get('/hello_world/{name}', function($name){
    return '<h1>Hello '.$name.'</h1>';
});



//rota de fallback, onde o user cai quando clica numa rota que não está registada
Route::fallback(function(){
  return view('utils.fallback');
});
