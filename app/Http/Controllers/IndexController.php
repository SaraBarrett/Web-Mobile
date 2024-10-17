<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome(){
        $weekDays = $this->getAllWeekDays();
        return view('welcome', compact('weekDays'));
    }

    public function home(){
        $myFirstVar = 'Hello World';

        $weekDays = $this->getAllWeekDays();
        $info = $this->getCourseInfo();
       
        return view('utils.home', compact('myFirstVar', 'weekDays', 'info'));
    }

    private function getAllWeekDays(){
        $weekDays = ['Segunda', 'Terça', 'Quarta', 'Quinta'];
        return $weekDays;
    }

    private function getCourseInfo(){
        $courseInfo = [
            'name' => 'Web&Mobile',
            'hours' => 950
        ];

        return  $courseInfo;
    }

}
