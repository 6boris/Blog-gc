@extends('admin.layouts.app')
@section('title', '首页')

@section('content')
<!-- 主要内容（开始） -->
    <!-- 顶部路径提示（开始） -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>首页</h2>
            <ol class="breadcrumb">
                <li class="active">
                   <a href="{{URL('admin')}}">首页</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
    <div class="wrapper wrapper-content animated fadeInRight gray-bg">
    
        <div class="ibox float-e-margins">
            <div class="alert alert-info alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                欢迎来到后台管理系统 <a class="alert-link" href="">了解更多</a>.                        
            </div>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                欢迎来到后台管理系统 <a class="alert-link" href="">了解更多</a>.
            </div>
        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="fa fa-cogs"></i>系统信息
                        </div>
                        <div class="panel-body">
                            <p><i class="fa fa-sitemap"></i>框架版本：Laravel 5.4</p>
                            <p><i class="fa fa-windows"></i> 服务环境：Apache/2.4.23 (Win64) PHP/5.6.25</p>
                            <p><i class="fa fa-warning"></i> 上传附件限制：2M </p>
                            <p><i class="fa fa-credit-card"></i> PHP 版本：5.6.25</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-cogs"></i> 个人信息
                        </div>
                        <div class="panel-body">
                            <p><i class="fa fa-send-o"></i> 博客：<a href="http://blog.anonycurse.cn" target="_blank">blog.anonycurse.cn</a>
                            </p>
                            <p><i class="fa fa-qq"></i> QQ：<a href="" target="_blank">88888888</a>
                            </p>
                            <p><i class="fa fa-weixin"></i> 微信：<a href="javascript:;">188888888</a>
                            </p>
                            <p><i class="fa fa-credit-card"></i> GitHub：<a href="http://www.github.com" >www.github.com</a>
                            </p>
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
<script>$(document).ready(function() {



                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.success('后台管理员', '欢迎来到后台管理系统');

                },
                1300);

                var data1 = [[0, 4], [1, 8], [2, 5], [3, 10], [4, 4], [5, 16], [6, 5], [7, 11], [8, 6], [9, 11], [10, 30], [11, 10], [12, 13], [13, 4], [14, 3], [15, 3], [16, 6]];
                var data2 = [[0, 1], [1, 0], [2, 2], [3, 0], [4, 1], [5, 3], [6, 1], [7, 5], [8, 2], [9, 3], [10, 2], [11, 1], [12, 0], [13, 2], [14, 8], [15, 0], [16, 0]];
                $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [data1, data2], {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: ["#1ab394", "#1C84C6"],
                    xaxis: {},
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                });

                var doughnutData = {
                    labels: ["App", "Software", "Laptop"],
                    datasets: [{
                        data: [300, 50, 100],
                        backgroundColor: ["#a3e1d4", "#dedede", "#9CC3DA"]
                    }]
                };

                var doughnutOptions = {
                    responsive: false,
                    legend: {
                        display: false
                    }
                };

            });</script>

    <script>
        window.onload = function(){
//            alert("12");
        }
    </script>

@endsection