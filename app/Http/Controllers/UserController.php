<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function returnViewAllUsers(){
        $cesaeInfo = $this->getCesaeInfo();

        return view('users.all_users', compact('cesaeInfo'));
    }

    public function returnViewAddUser(){
        return view('users.add_user');
    }

    private function getCesaeInfo(){
        $cesaeInfo = [
            'name' => 'Cesae',
            'address' => 'Rua Ciríaco Cardoso 186, 4150-212 Porto',
            'email' => 'cesae@cesae.pt'
            ];

       return $cesaeInfo;
    }
}
