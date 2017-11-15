<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller
{
    public function index(){
    	return view('admin.user.index');

    }

    public function demo(){
    	$user = new User();
    	
    	$user['id'] = 4;
    	$res = $user->save();

    	dd($res);
    }

    public function edit(){
    	return view('admin.user.edit');
    }


    public function login(){
    	return view('admin.user.login');
    }
    public function register(){
    	return view('admin.user.register');
    }
    public function loginout(){

    }

}
