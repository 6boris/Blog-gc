<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Entity\MS_Result;
use Session;

use App\Model\Admin;

class AdminUserControllter extends Controller
{
    public function index(){
    	echo 11; 

    }
    public function login(){
    	return view('admin.user.login');
    }
    public function register(Request $request){
        $admin = new Admin();

        // 初始化AJAX返回参数
        $res = new MS_Result();
        $res->status = 0;
        $res->message = $request->input();

        // 检测用户是否存在
        if($admin->where('username','=',$request->input('uname'))->count()){
            $res->status = 2;
            $res->message = '用户名已经存在';
            return $res->toJson();
        }

        // 检测邮箱是否存在
        if($admin->where('email','=',$request->input('uemail'))->count()){
            $res->status = 2;
            $res->message = '邮箱已经存在';
            return $res->toJson();
        }

        $admin->email = $request->input('uemail');
        $admin->username = $request->input('uname');
        $admin->password = $request->input('upwd');
        $admin->loginnum = 1;
        $admin->last_login_ip = $request->getClientIp();
        $admin->last_login_time = date('Y-m-d:H-s-m');

        $admin->save();

        return $res->toJson();

    }
    public function loginout(Request $request){		
	}
}
