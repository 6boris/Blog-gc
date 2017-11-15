@extends('admin.layouts.app')
@section('title', '系统配置')


@section('mycss')
<link href="{{URL::asset('style/admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('style/admin/css/plugins/bootstrap-table/bootstrap-table.css')}}" rel="stylesheet">
<!-- <link href="{{URL::asset('style/admin/css/plugins/dataTables/jquery.dataTables.css')}}" rel="stylesheet"> -->
@endsection

@section('content')
<!-- 主要内容（开始） -->
    <!-- 顶部路径提示（开始） -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>角色管理</h2>
            <ol class="breadcrumb">
                <li> 
                    <a href="{{URL('admin')}}">首页</a>
                </li>
                <li>
                    <strong>用户配置</strong>
                </li>
                <li class="active">
                   <a href="{{URL('admin/sysconfig/role')}}">系统配置</a>
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
                    </div>
                    <div class="ibox-content">
                    <div class="table-responsive">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>名称</th>
                        <th>标题</th>
                        <th>类型</th>
                        <th>分组</th>
                        <th>创建时间</th>
                        <th>更新时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="">
                        <td>01</td>
                        <td>web_site_title</td>
                        <td>网站标题</td>
                        <td>字符</td>
                        <td>基本</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>
                            <a href="javascript:;" onclick="">
                                <div id=""><span class="label label-info">开启</span></div>
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-xs"> <i class="fa fa-paste"></i> 编辑</a>
                            <a href="" class="btn btn-info btn-xs"><i class="fa fa-paste"></i> 权限分配</a>
                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</a>
                        </td>
                    </tr>

                    <tr class="">
                        <td>02</td>
                        <td>web_site_keyword</td>
                        <td>网站关键字</td>
                        <td>字符</td>
                        <td>基本</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>
                            <a href="javascript:;" onclick="">
                                <div id=""><span class="label label-info">开启</span></div>
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-xs"> <i class="fa fa-paste"></i> 编辑</a>
                            <a href="" class="btn btn-info btn-xs"><i class="fa fa-paste"></i> 权限分配</a>
                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</a>
                        </td>
                    </tr>

                    <tr class="">
                        <td>01</td>
                        <td>web_site_title</td>
                        <td>网站描述</td>
                        <td>字符</td>
                        <td>基本</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>
                            <a href="javascript:;" onclick="">
                                <div id=""><span class="label label-info">开启</span></div>
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-xs"> <i class="fa fa-paste"></i> 编辑</a>
                            <a href="" class="btn btn-info btn-xs"><i class="fa fa-paste"></i> 权限分配</a>
                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</a>
                        </td>
                    </tr>

                    <tr class="">
                        <td>02</td>
                        <td>web_site_description</td>
                        <td>网站标题</td>
                        <td>字符</td>
                        <td>基本</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>2017-5-7 18:20:47</td>
                        <td>
                            <a href="javascript:;" onclick="">
                                <div id=""><span class="label label-info">开启</span></div>
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-xs"> <i class="fa fa-paste"></i> 编辑</a>
                            <a href="" class="btn btn-info btn-xs"><i class="fa fa-paste"></i> 权限分配</a>
                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</a>
                        </td>
                    </tr>
                  
                    

                    </tbody>

                    </table>
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
<script src="{{URL::asset('style/admin/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{URL::asset('style/admin/js/plugins/bootstrap-table/bootstrap-table.js')}}"></script>
<!-- <script src="{{URL::asset('style/admin/js/plugins/dataTables/jquery.dataTables.js')}}"></script> -->
<script>
       $(document).ready(function(){
            $('.dataTables-example').DataTable({

                pageLength: 50,
                responsive: true,
                // bInfo: true,
                // info:true,
                bAutoWidth: true,
                dom: '<"html5buttons"B>lfrtip',
                // sDom: '<"top"fli>rt<"bottom"p><"clear">',
                // bJQueryUI:true,
                bStateSave:true,
                sScrollX: "100%",
                sScrollXInner: "100%",
                bScrollCollapse: true,
                sPaginationType:'full_numbers',
                columnDefs: [
                    { className: "my_class", "targets": [ 0 ] }
                  ],

                language: {
                    emptyTable: '没有数据',  
                    loadingRecords: '加载中...',  
                    processing: '查询中...',  
                    search: '检索:',  
                    lengthMenu: '每页 _MENU_ 条记录',  
                    zeroRecords: '没有数据',  
                    paginate:{  
                        first:    '首页',  
                        last:       '尾页',  
                        next:       '下一页',  
                        previous:   '上一页'  
                    },
                    info: '第 _PAGE_ 页 / 总 _PAGES_ 页',  
                    infoEmpty: '没有数据',  
                    infoFiltered: '(过滤总件数 _MAX_ 条)'    
                },

                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });


</script>

<script>


</script>



    
@endsection