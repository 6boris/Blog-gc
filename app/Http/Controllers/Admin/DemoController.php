<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use App\Demo as Demo;
use DB;
use App\Entity\MS_Result;

class DemoController extends Controller
{
    public function index(){
        $res = new MS_Result();
        dd($res);
    }
}
