@extends('admin.layouts.app')
@section('title', '基本配置')

@section('content')
<!-- 主要内容（开始） -->
    <!-- 顶部路径提示（开始） -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>首页</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{URL('admin')}}">首页</a>
                </li>
                <li>
                    <strong>系统配置</strong>
                </li>
                <li class="active">
                   <a href="{{URL('admin/sysconfig/index')}}">基本配置</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
    <div class="wrapper wrapper-content animated fadeInRight">
    
        <div class="row ">
            <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>网站的基本配置<small>...</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">配置选项 1</a>
                                    </li>
                                    <li><a href="#">配置选项 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">
                                
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站标题：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i>前台页面显示的标题</span>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">站点状态</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="account">
                                            <option>开启</option>
                                            <option>关闭</option>
                                        </select>
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i>  站点关闭后其他用户不能访问，管理员可以正常访问</span>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站备案号：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i> 设置在网站底部显示的备案号，如“ 陇ICP备15002349号-1</span>
                                    </div>
                                </div>
                                    
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站描述：</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" type="text" rows="4" name="config[web_site_description]">Laravel 后台管理</textarea>
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i> 网站搜索引擎描述</span>
                                                                                           
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站关键字：</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" type="text" rows="4" name="config[web_site_description]">Laravel 后台管理</textarea>
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i> 网站搜索引擎关键字</span>
                                                                                           
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                                        </div>
                                    </div>


                            </form>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <!-- 主体内容（结束） -->
    

<!-- 主要内容（结束） -->

@endsection


@section('myjs')


    
@endsection