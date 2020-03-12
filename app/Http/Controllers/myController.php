<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function home1(){

        return view('school.h_work_1');
    }
    public function home2(){

        return view('school.h_work_2');
    }

    public function home3(){

        return view('school.h_work_3');
    }


}
