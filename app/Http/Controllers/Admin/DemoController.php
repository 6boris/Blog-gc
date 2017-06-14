<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use App\Demo as Demo;
use DB;

class DemoController extends Controller
{
    public function index(){

        $user = new Demo();
        $user->name = "123";
        $Arr[10] =array();
//        DB::table('user')->insert(array(
//            array('name' => 'taylor@example.com'),
//            array('name' => 'dayle@example.com'),
//        ));

        for ($x=0; $x<=10000; $x++) {
            $name = 'name'.(string)$x;
            $Arr[$x] = array(
                'name' => $name,
            );
        }



//        $res = $user->save($Arr);
        $res = DB::table('user')->insert($Arr);

    	dd($res);
    }
}
