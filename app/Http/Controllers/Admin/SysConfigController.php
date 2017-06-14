<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SysConfigController extends Controller
{
    public function index(){
    	return view('admin.sysconfig.index');
    }

    public function demo(){
    	return view('admin.sysconfig.demo');
    }

    public function system(){
    	return view('admin.sysconfig.system');
    }

    public function api(){
    	return view('admin.sysconfig.api');
    }


}
