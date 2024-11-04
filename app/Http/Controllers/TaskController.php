<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){

        $tasks = $this->getAllTasks();
        //dd( $tasks);

        return view('tasks.all_tasks', compact('tasks'));

    }

    protected function getAllTasks() {
        
        $tasks = DB::table('tasks')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->select('tasks.*', 'users.name as username')
        ->get();

        return  $tasks;
    }


}
