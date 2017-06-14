<!-- * * INSPINIA - Responsive Admin Theme * version 2.7 * -->
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="description" content=@yield('title') />
        <meta name="keywords" content=@yield('title') />
        <link href="{{URL::asset('style/admin/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('style/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{URL::asset('style/admin/css/animate.css')}}" rel="stylesheet">
        <link href="{{URL::asset('style/admin/css/style.css')}}" rel="stylesheet"></head>
        <link href="{{URL::asset('style/admin/css/app.css')}}" rel="stylesheet"></head>

        <!-- Toastr style -->
        <!-- <link href="{{URL::asset('style/admin/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet"> -->
        <!-- Gritter -->
        <!-- <link href="{{URL::asset('style/admin/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet"> -->

        @yield('mycss')

    
    <body>
        <div id="wrapper">
            <!-- 左侧菜单栏  -->
            @include('admin.layouts.navigation')  

            <!-- 右侧内容 -->
            <div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 950px; ">
                <!-- 顶部菜单 -->
                @include('admin.layouts.top')  

                <!-- 主要内容  -->
                @yield('content')
                @yield('footer')

            </div>
    
        </div>

        <!-- Mainly scripts -->
        <script src="{{URL::asset('style/admin/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{URL::asset('style/admin/js/jquery.cookie.js')}}"></script>
        <script src="{{URL::asset('style/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('style/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{URL::asset('style/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- Flot -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/flot/jquery.flot.js')}}"></script> -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script> -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/flot/jquery.flot.spline.js')}}"></script> -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/flot/jquery.flot.resize.js')}}"></script> -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/flot/jquery.flot.pie.js')}}"></script> -->
        <!-- Peity -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/peity/jquery.peity.min.js')}}"></script> -->
        <!-- <script src="{{URL::asset('style/admin/js/demo/peity-demo.js')}}"></script> -->

        <!-- Custom and plugin javascript -->
        <script src="{{URL::asset('style/admin/js/inspinia.js')}}"></script>
        <script src="{{URL::asset('style/admin/js/plugins/pace/pace.min.js')}}"></script>

        <!-- jQuery UI -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script> -->
        <!-- GITTER -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/gritter/jquery.gritter.min.js')}}"></script> -->
        <!-- Sparkline -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script> -->
        <!-- Sparkline demo data -->
        <!-- <script src="{{URL::asset('style/admin/js/demo/sparkline-demo.js')}}"></script> -->
        <!-- ChartJS-->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/chartJs/Chart.min.js')}}"></script> -->
        <!-- Toastr -->
        <!-- <script src="{{URL::asset('style/admin/js/plugins/toastr/toastr.min.js')}}"></script> -->
        
        <script src="{{URL::asset('style/admin/js/app.js')}}"></script>

        @yield('myjs')

    </body>

</html>