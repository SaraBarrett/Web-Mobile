<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function returnDashView(){

        return view('dashboard.index');
    }
}
