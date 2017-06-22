<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\MS_Result;
use App\Model\Admin;
use App\Model\Article;
use App\Model\ArticleCate;
use LaravelChen\Editormd\EditorMdProvider;
use Markdown;

class DemoController extends Controller
{


	
    public function index(){
    	$art = new Article();

        $resCon = $art->where('id',111)->get(array('content'))[0]->content;
        // $art_cate = new ArticleCate(); 

        // $art_cate_res = $art_cate->where('status',1)->get(array('id','name'));
        // dd($resCon);
        $res = Markdown::convertToHtml($resCon);
        return view('admin.demo')->with('content',$resCon);


        
    }


}
