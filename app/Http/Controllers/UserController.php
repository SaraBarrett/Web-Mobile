<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function returnViewAllUsers(){
        return view('users.all_users');
    }

    public function returnViewAddUser(){
        return view('users.add_user');
    }
}
