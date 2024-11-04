<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function returnViewAllUsers(){
        $cesaeInfo = $this->getCesaeInfo();

        $users = $this->getAllUsersFromDB();

        return view('users.all_users', compact('cesaeInfo', 'users'));
    }

    public function returnViewAddUser(){
        return view('users.add_user');
    }

    public function insertUser(){

        //insert na BD
        // DB::table('users')
        // ->insert([
        //     'name' => 'catarina',
        //     'email' => 'catarina@gmail.com',
        //     'password' => 'sara14567'

        // ]);


        //update na BD
        // DB::table('users')
        // ->where('id', 1)
        // ->update([
        //     'name' => 'Liliana',
        //     'nif' => '123456',
        // ]);


        //update ou inserir
        // Db::table('users')
        // ->updateOrInsert(
        //     [
        //         'email' => 'Pedro@gmail.com',
        //         'password' => 'Pedro123456',
        //     ],
        //     [
        //         'name' => 'Pedro',
        //         'updated_at' => now(),
        //         'nif' => '123456'
        //     ]
        // );


        db::table('users')
        ->where('id', 5)
        ->delete();


        return Response::json('sucesso');
    }

    public function viewUser($id){

        $user = User::where('id', $id)->first();
        return view('users.show_user', compact('user'));
    }

    public function deleteUser($id){

        db::table('tasks')->where('user_id', $id)->delete();

        User::where('id', $id)->delete();

        return back();
    }

    private function getCesaeInfo(){
        $cesaeInfo = [
            'name' => 'Cesae',
            'address' => 'Rua Ciríaco Cardoso 186, 4150-212 Porto',
            'email' => 'cesae@cesae.pt'
            ];

       return $cesaeInfo;
    }

    private function getAllUsersFromArray(){
        $users = [
            ['id' =>1, 'name' =>'Sara', 'email'=>'Sara@gmail.com'],
            ['id' =>2, 'name' =>'Dra Anabela', 'email'=>'Anabela@gmail.com'],
            ['id' =>3, 'name' =>'Bruno', 'email'=>'Bruno@gmail.com'],
        ];

        return $users;
    }

    private function getAllUsersFromDB(){
        // $users = Db::table('users')
        //             ->whereNull('updated_at')
        //             ->get();

        //usar o model

        $users= User::all();

        return $users;
    }
}
