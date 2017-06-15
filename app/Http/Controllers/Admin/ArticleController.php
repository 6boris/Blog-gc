<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\MS_Result;
use App\Model\Article;
use Datatables;

/**
 *      文章类
 */
class ArticleController extends Controller
{
    public function index(){
        return view('admin.article.index');
    }

    public function listarticle(){
        $art = new Article();
        $res = $art->all();
        return DataTables::of($res)
        ->editColumn('action', function ($res) {
                return '<a href="article/edit/?id='.$res->id.'" class="btn btn-primary btn-xs btn-outline"><i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;<a href="article/del/?id='.$res->id.'" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-trash-o"></i> 删除</a>';
            })
        ->removeColumn('status')
        ->make(true);
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
            $art->cate_id = 1;
            $art->keywords = $request->input('keywords');
            $art->content = $request->input('content');
            $art->save();

            return $res->toJson();
        }

        return view('admin.article.addarticle');
    }

}
