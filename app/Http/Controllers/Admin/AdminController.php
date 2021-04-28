<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public  function  index(){
       return view('admin.index');
   }
    public  function  transfer(){
        return view('admin.transfer');
    }
    public  function  reports(){
        return view('admin.reports');
    }
    public  function  payroll(){
        return view('admin.payroll');
    }

}
