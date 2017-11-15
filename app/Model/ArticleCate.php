<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleCate extends Model
{
    //文章分类表
    protected $table = 'article_cate';
    protected $primaryKay = 'id';

    public $timestmps = true;
}
