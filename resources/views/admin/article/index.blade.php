@extends('admin.layouts.app')
@section('title', '添加文章')

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
                   <a href="{{URL('admin/article/addcate')}}">添加分类</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
    <div class="wrapper wrapper-content animated fadeInRight">
    
        <div class="row white-bg ">
            <div class="col-lg-12">
                    
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>添加文章<small>...</small></h5>
                        </div>
							
                        <div class="ibox-content">
                            <form class="form-horizontal"  action="javascript:;" id="save_form">
                                <div class="hr-line-dashed"></div>
        
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文章标题：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="art_title" >
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i>前台页面显示的标题</span>
                                    </div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3">
                                            <button class="btn btn-primary" href="javascript: ;" type="submit" id="save"><i class="fa fa-save"></i> 保存信息</button>&nbsp;&nbsp;&nbsp;
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
<script>
        
        $('#save').click(function(){

            var oTitle = $("#art_title");
            var oCategory = $('#art_category');
            var oKeywords = $("#art_keywords");
            var oContent = $("#art_content");

            $.ajax({
            url: '/admin/article/add',
            type: 'POST',
            dataType: 'json',
            cache: false,
            data: {
                title: oTitle.val(),
                keywords: oKeywords.val(),
                content: oContent.val(),
                _token: "{{csrf_token()}}"
            },
            success: function(data) {
                if (data.status != 0){
                    alert(data.message);
                }else{
                   console.log(data);
                }
            },
            error: function(data) {
                alert("错误");
            }
        });
        });



   
</script>
@endsection