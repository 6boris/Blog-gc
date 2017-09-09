@extends('admin.layouts.app')
@section('title', '添加文章')

@section('content')

<link rel="stylesheet" href="{{URL('vendor\editormd\css\editormd.css')}}">
<link rel="stylesheet" href="{{URL('vendor\editormd\css\editormd.preview.css')}}">


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
                            <div id="editormd"> 
                               <textarea type="text" id="art_content" rows="5" name="remark" id="remark" placeholder="内容" class="form-control">{{$content}}</textarea>
                            </div>   
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <!-- 主体内容（结束） -->
    

<!-- 主要内容（结束） -->

@endsection


@section('myjs')
<script src="{{URL('vendor\editormd\js\editormd.js')}}"></script>
<script src="{{URL('vendor\editormd\lib\marked.min.js')}}"></script>
<script>
        
 $(function() {
        var testEditor;
        testEditor = editormd.markdownToHTML("editormd", {
                    htmlDecode      : "style,script,iframe",  // you can filter tags decode
                    emoji           : true,
                    taskList        : true,
                    tex             : true,  // 默认不解析
                    flowChart       : true,  // 默认不解析
                    sequenceDiagram : true,  // 默认不解析
                });

    });


   
</script>
@endsection