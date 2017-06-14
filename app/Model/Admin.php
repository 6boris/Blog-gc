<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	// 后台登录用户表
    protected $table = 'admin';
    protected $primaryKey = 'id';

    public $timestamps = true;
}
