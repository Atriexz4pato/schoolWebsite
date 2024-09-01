<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Neew;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //

    public function co_curricular(){

        return view('co_curricular');
    }
    public function home(){

        $news = Neew::all();
        return view('welcome',compact('news'));
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
