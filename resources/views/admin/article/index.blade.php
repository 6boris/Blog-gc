@extends('admin.layouts.app')
@section('title', '添加文章')

@section('mycss')
<!-- 自定义CSS -->
<style>
thead th{
    font-size: 15px;
    font-weight: bold;

} 
th{
    height: 50px;
    font-size: 14px;
    font-weight: normal;
}
th img{
    height: 35px;
    width: 35px;
    border-radius: 50%;
}

</style>
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
                            <h5>文章列表<small>...</small></h5>
                        </div>
							
                        <div class="ibox-content">
                           
                             
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="long-tr">
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
                           
                            <tbody id="list-content">
                                @foreach ($art as $art)
                                <tr>
                                    <th>{{$art->id}}</th>
                                    <th>{{$art->title}}</th>
                                    <th>{{$art->cate_id}}</th>
                                    <th><img src="{{URL('style/admin/img/a1.jpg')}}" alt=""></th>
                                    <th>{{$art->views}}</th>
                                    <th>{{$art->created_at}}</th>
                                    <th>{{$art->updated_at}}</th>
                                    <th><span class="label label-danger">禁用</span></th>
                                    <th>是</th>
                                    <th>
                                        <a href="javascript:;" onclick="" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </th>
                                </tr>
                                @endforeach


                    

                                <tr>
                                    <th>{{$art[0]->id}}</th>
                                    <th>{{$art[0]->title}}</th>
                                    <th>{{$art[0]->cate_id}}</th>
                                    <th><img src="{{URL('style/admin/img/a1.jpg')}}" alt=""></th>
                                    <th>{{$art[0]->views}}</th>
                                    <th>{{$art[0]->created_at}}</th>
                                    <th>{{$art[0]->updated_at}}</th>
                                    <th><span class="label label-danger">禁用</span></th>
                                    <th>是</th>
                                    <th>
                                        <a href="javascript:;" onclick="" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>PHP实现时间轴函数</th>
                                    <th>PHP</th>
                                    <th><img src="{{URL('style/admin/img/a2.jpg')}}" alt=""></th>
                                    <th>1</th>
                                    <th>2016-01-04 12:45:38</th>
                                    <th>2017-06-06 07:50:52</th>
                                    <th><span class="label label-info">开启</span></th>
                                    <th>是</th>
                                    <th>
                                        <a href="javascript:;" onclick="" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>PHP实现时间轴函数</th>
                                    <th>PHP</th>
                                    <th><img src="{{URL('style/admin/img/a3.jpg')}}" alt=""></th>
                                    <th>1</th>
                                    <th>2016-01-04 12:45:38</th>
                                    <th>2017-06-06 07:50:52</th>
                                    <th><span class="label label-danger">禁用</span></th>
                                    <th>是</th>
                                    <th>
                                        <a href="javascript:;" onclick="" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </th>
                                </tr>
    

                            </tbody>
                        </table>
                           
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
                url: '/admin/article/details',
                type: 'POST',
                dataType: 'JSON',
                cache: false,
                data: {
                    title: oTitle.val(),
                    keywords: oKeywords.val(),
                    content: oContent.val(),
                    _token: "{{csrf_token()}}"
                },
                success: function(data) {
                    if (data.status != 0){
                       console.log(data);

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