<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function returnViewAllUsers(){
        $cesaeInfo = $this->getCesaeInfo();

        $users = $this->getAllUsersFromArray();


        return view('users.all_users', compact('cesaeInfo', 'users'));
    }

    public function returnViewAddUser(){
        return view('users.add_user');
    }

    public function insertUser(){
        DB::table('users')
        ->insert([
            'name' => 'Sara',
            'email' => 'sarae1@gmail.com',
            'password' => 'sara14567'

        ]);

        return Response::json('sucesso');
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
}
