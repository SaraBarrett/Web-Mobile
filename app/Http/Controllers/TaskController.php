<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){

        $tasks = $this->getAllTasks();
        //dd( $tasks);

        return view('tasks.all_tasks', compact('tasks'));

    }

    public function returnViewAddTask(){
        $users = DB::table('users')->get();
        
        return view('tasks.add_task', compact('users'));
    }

    public function createTask(Request $request) {

        $request->validate([
            'name' => 'required|string|max:50',
            'description' =>'string|max:255',
            'user_id' => 'required'
        ]);

        DB::table('tasks')
        ->insert([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'due_at' => $request->due_at,
        ]);

        return redirect()->route('tasks.all')->with('successM', 'Tarefa adicionada com sucesso!');

    }

    protected function getAllTasks() {

        $tasks = DB::table('tasks')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->select('tasks.*', 'users.name as username')
        ->get();

        return  $tasks;
    }


}
