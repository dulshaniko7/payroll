<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
   public  function  index(){
       abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       return view('admin.index');
   }
    public  function  transfer(){
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.transfer');
    }
    public  function  reports(){
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.reports');
    }
    public  function  payroll(){
        abort_if(Gate::denies('admin'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.payroll');
    }

}
