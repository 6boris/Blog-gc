@extends('admin.layouts.app')
@section('title', '添加文章')

@section('content')
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
 <!-- <link rel="stylesheet" href="http://www.datatable.com/css/app.css"> -->

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
                                <table class="table table-bordered" id="users-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>文章标题</th>
                                            <th>文章分类</th>
                                            <th>文章封面</th>
                                            <th>浏览量</th>
                                            <th>创建时间</th>
                                            <th>修改时间</th>
                                            <th>状态</th>
                                            <th>是否推荐</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                </table>
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
 <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
         $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{URL("admin/article/listarticle")}}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title',searchable: true },
                { data: 'cate_id', name: 'cate_id' },
                { data: 'photo', name: 'photo' },
                { data: 'views', name: 'views' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
                { data: 'status', name: 'status' },
                { data: 'is_tui', name: 'is_tui' },
                { data: 'action', name: 'action' ,searchable: true},
            ]
        });

        $('#save').click(function(){

            var oTitle = $("#art_title");
            var oCategory = $('#art_category');
            var oKeywords = $("#art_keywords");
            var oContent = $("#art_content");

            $.ajax({
            url: '/admin/article/details',
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