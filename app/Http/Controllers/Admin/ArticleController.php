<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\MS_Result;
use App\Model\Article;
use Datatables;
use App\Model\ArticleCate;

/**
 *      文章类
 */
class ArticleController extends Controller
{
    public function index(){ 
         $art = new Article();
        $res = $art->all();
        dd($res);
    }

    public function listarticle(){
        $art = new Article();
        $res = $art->all();
        
    }

    public function edit(Request $request){
        dd($request->input('id'));
    }
    public function del(Request $request){
        dd($request->input('id'));
    }

    public function add(Request $request){
        if ( $request->ajax() && $request->isMethod('post')){

            // 实例化返回结果
            $res = new MS_Result();
            $res->status = 0;
            $res->message = $request->input();

            $art = new Article();
            $art->title = $request->input('title');
            $art->cate_id = $request->input('category');
            $art->keywords = $request->input('keywords');
            $art->content = $request->input('content');
            $art->save();

            return $res->toJson();
        }

        $art_cate = new ArticleCate(); 

        $art_cate_res = $art_cate->where('status',1)->get(array('id','name'));


        return view('admin.article.addarticle')->with('cate',$art_cate_res);
    }

}
