<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	// 文章表
    protected $table = 'article';
    protected $primaryKey = 'id';

    public $timestamps = true;

}
