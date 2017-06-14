<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use App\Entity\MS_Result;
use App\Model\Admin;
use App\Model\Article;
use App\Model\ArticleCate;

class DemoController extends Controller
{


	
    public function index(){
    	$res = new DataTables();
        dd($res);
    }

        // $admin = new Article();
        // $admin->id = 3;
        // $admin->title = 'PHP实现时间轴函数';
        // $admin->cate_id = 1;
        // $admin->photo = 'null';
        // $admin->remark = '本文介绍如何用PHP将时间显示为“刚刚”、“5分钟前”、“昨天10:23”等时间轴形式，而不是直接显示具体日期和时间。';
        // $admin->keyword = 'PHP';
        // $admin->content = "嘿嘿，这是文章内容";
        // $admin->views = 99;
        // $admin->type = 1;
        // $admin->from = 'JIA';
        // $admin->writer = 'JIA';
        // $admin->ip = '127.0.0.1';
        // $res = $admin->save();
        // dd($res);
}
