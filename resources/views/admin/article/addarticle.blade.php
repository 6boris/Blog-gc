@extends('admin.layouts.app')
@section('title', '添加文章')

@section('content')

<link rel="stylesheet" href="{{URL('vendor\editormd\css\editormd.css')}}">

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
                                <label class="col-sm-2 control-label">{{$cate[1]['name']}}</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" id="art_category">
                                            <option name={{$cate[0]['id']}}>{{$cate[0]['name']}}</option>
                                            <option name={{$cate[1]['id']}}>{{$cate[1]['name']}}</option>
                                            <option name={{$cate[2]['id']}}>{{$cate[2]['name']}}</option>
                                            <option name={{$cate[3]['id']}}>{{$cate[3]['name']}}</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">关键字：</label>
                                    <div class="col-sm-10">
                                        <input type="text"  class="form-control" id="art_keywords">
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle">&nbsp</i>关键字</span>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <!-- <label class="col-sm-2 control-label">内容：</label> -->
                                    <div class="col-sm-12">
                                        <div id="editormd"> 
                                           <textarea type="text" id="art_content" rows="5" name="remark" id="remark" placeholder="内容" class="form-control"></textarea>
                                        </div>    
                                    </div>
                                </div>
                               <div class="form-group">
                                
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
<script src="{{URL('vendor\editormd\js\editormd.js')}}"></script>
<script>
        
 $(function() {
        var testEditor;
        testEditor = editormd("editormd", {
            width  : "90%",
                height : 720,
                path   : '/vendor/editormd/lib/',
                // markdown : md,
                codeFold : true,
                searchReplace : true,
                saveHTMLToTextarea : true,    // 保存 HTML 到 Textarea
                //watch : false,
                htmlDecode : "style,script,iframe|on*",            // 开启 HTML 标签解析，为了安全性，默认不开启
                emoji : true,
                taskList : true,
                tocm            : true,         // Using [TOCM]
                tex : true,                     // 开启科学公式 TeX 语言支持，默认关闭
                //previewCodeHighlight : false,  // 关闭预览窗口的代码高亮，默认开启
                flowChart : true,  
                sequenceDiagram : true,         // 同上
                onload : function() {
                    // console.log("onload =>", this, this.id, this.settings);
                }
        });




        $('#save').click(function(){

        var oTitle = $("#art_title");
        var oCategory = $('#art_category option:selected');
        var oKeywords = $("#art_keywords");
        var cContent = testEditor.getHTML();

        if ( $("#art_title").val() === "" ){  
            alert('文章标题不能为空');
            return false;
        }

        if ( cContent === "" ){  
            alert('文章内容不能为空');
            return false;
        }

        

        $.ajax({
            url: '/admin/article/addarticle',
            type: 'POST',
            dataType: 'json',
            cache: false,
            data: {
                title: oTitle.val(),
                keywords: oKeywords.val(),
                content: cContent,
                category: oCategory.attr('name'),
                _token: "{{csrf_token()}}"
            },
            success: function(data) {
                if (data.status != 0){
                    alert(data.message);
                }else{
                   alert('文章保存成功');
                }
            },
            error: function(data) {
                alert("错误");
            }
        });
});












    });






   
</script>
@endsection