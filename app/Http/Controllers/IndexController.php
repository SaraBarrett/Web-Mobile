<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function home(){
        return view('utils.home');
    }
}
