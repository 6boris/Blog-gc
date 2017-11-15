<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Login</title>
        <link href="{{URL::asset('style/admin/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('style/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{URL::asset('style/admin/css/animate.css')}}" rel="stylesheet">
        <link href="{{URL::asset('style/admin/css/style.css')}}" rel="stylesheet">
        <link href="{{URL::asset('style/admin/css/app.css')}}" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">Blog</h1>
            </div>
            <h3>后台登录</h3>
            <form class="m-t" role="form" action="">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登录</button>

                <a href="#"><small>忘记密码?</small></a>
                <p class="text-muted text-center"><small>现在还没有账号?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">注册账号</a>
            </form>
            <p class="m-t"> <small>Anonycurse Blog 3 &copy; 2017</small> </p>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="{{URL::asset('style/admin/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::asset('style/admin/js/bootstrap.min.js')}}"></script>

</body>

</html>
