<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Teacher;
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
        $teachers = Teacher::all();

        return view('teachers',compact('teachers'));

    }
    public function events(){
        $events= Event::all();
        return view('events',compact('events'));

    }
    public function contacts(){
        return view('contacts');
    }

}
