<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        return view ('user.index');
    }
    public function contact(){
        return view ('user.contact');
    }
    public function emergency(){
        return view ('user.emergency');
    }
    public function photo(){
        return view ('user.photo');
    }
    public function special(){
        return view ('user.special');
    }
}
