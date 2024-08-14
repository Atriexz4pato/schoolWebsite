<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //

    public function co_curricular(){

        return view('co_curricular');
    }
    public function home(){
        return view('welcome');
    }
    public function teachers(){
        return view('teachers');
    }
    public function events(){
        return view('events');

    }
    public function contacts(){
        return view('contacts');
    }

}
