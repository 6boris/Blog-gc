<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\MS_Result;

class ArticleController extends Controller
{
    public function article(){
    	return view('admin.article.index');
    }

    public function add(Request $request){
        
        if ( $request->ajax() && $request->isMethod('post')){
            $res = new MS_Result();
            $res->status = 0;
            $res->message = $request->input();
            return $res->toJson();
        }

        return view('admin.article.add');
    }

    public function cate(){

    }

    public function addcate(){

    }
}
