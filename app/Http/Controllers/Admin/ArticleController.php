<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\MS_Result;

class ArticleController extends Controller
{
    public function index(){
        return view('admin.article.index');
    }

    public function article(){
    	return view('admin.article.index');
    }

    public function addarticle(Request $request){
        
        if ( $request->ajax() && $request->isMethod('post')){
            $res = new MS_Result();
            $res->status = 0;
            $res->message = $request->input();
            return $res->toJson();
        }

        return view('admin.article.addarticle');
    }

    public function cate(){
        return view('');
    }
    public function addcate(){
        return view('admin.article.addcate');
    }


}
