@extends('admin.layouts.app')
@section('title', '用户配置')


@section('mycss')
<link href="{{URL::asset('style/admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('style/admin/css/plugins/bootstrap-table/bootstrap-table.css')}}" rel="stylesheet">
<!-- <link href="{{URL::asset('style/admin/css/plugins/dataTables/jquery.dataTables.css')}}" rel="stylesheet"> -->
<link rel="stylesheet" href="{{URL('style/admin/css/plugins/switchery/switchery.css')}}">

@endsection

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
                    <strong>用户配置</strong>
                </li>
                <li class="active">
                   <a href="{{URL('admin/sysconfig/api')}}">用户列表</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
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
                                    <label class="col-sm-2 control-label">管理员名称：</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">管理员角色：</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="account">
                                            <option>请选择角色</option>
                                            <option>系统维护员</option>
                                            <option>系统测试员</option>
                                            <option>内容管理员</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">头像：</label>
                                    <div class="input-group col-sm-4">
                                        <<div class="col-sm-3">
                                            <button class="btn btn-success " type="button"><i class="fa fa-upload"></i>&nbsp;&nbsp;<span class="bold">选择头像</span></button>
                                        </div>
                                        <div class="col-lg-3" style="margin-left:10%;">                                       
                                            <a href="">
                                                <img alt="image" src="{{URL('style/admin/img/a1.jpg')}}" style="width:100px; height: 100px;border-radius: 50%;">
                                            </a>
                                        </div>
                                     </div>
                                </div>
                                    
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">登录密码：</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">真实姓名：</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">状&nbsp;态：</label>
                                    <div class="col-sm-6">
                                        <div class="radio ">                                        
                                            <input type="checkbox" name='status' value="1" class="js-switch" checked >&nbsp;&nbsp;默认开启                                     
                                        </div>
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
<script src="{{URL::asset('style/admin/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{URL::asset('style/admin/js/plugins/bootstrap-table/bootstrap-table.js')}}"></script>
<script src="{{URL('style/admin/js/plugins/switchery/switchery.js')}}"></script>


<script>
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            elems.forEach(function(html) {
              var switchery = new Switchery(html);
            });

</script>



    
@endsection