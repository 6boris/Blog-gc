<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\MS_Result;
use App\Model\Admin;
use App\Model\Article;
use App\Model\ArticleCate;
use LaravelChen\Editormd\EditorMdProvider;

class DemoController extends Controller
{


	
    public function index(){
    	
        $cate = new  ArticleCate();

        $res = $cate->where('status' , 1)->get(array('id','name'));
       return "asd".$res;

    }
    public function details(){
        $art = new Article();
        $res = $art->all();
        return DataTables::of($res)->make(true);
    }
    public function getRowDetails()
    {
        return view('admin.demo.index');
    }

    public function getRowDetailsData()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);

        return Datatables::of($users)->make(true);
    }

}
