<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="{{URL::asset('style/admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('style/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('style/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::asset('style/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('style/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('style/admin/css/app.css')}}" rel="stylesheet">


</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Blog</h1>

            </div>
            <h3>用户注册</h3>
            
                <div class="form-group">
                    <input id="oUname" type="text" class="form-control" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input id="oEmail" type="email" class="form-control" placeholder="邮箱" required="">
                </div>
                <div class="form-group">
                    <input id="oPwd" type="password" class="form-control" placeholder="密码" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> 同意隐私政策</label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" onclick="register()">注册</button>

                <p class="text-muted text-center"><small>已结有账号了?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="">登录</a>
            
            <p class="m-t"> <small>Anonycurse Blog 3 &copy; 2017</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{URL::asset('style/admin/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::asset('style/admin/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('style/admin/js/plugins/icheck/icheck.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });


       function register(){

            var oUname = $("#oUname");
            var oEmail = $("#oEmail");
            var oPwd = $("#oPwd");
            var sPwd = oPwd.val();


            if(oUname.val() == ''){
                alert('用户名不能为空');
                return false;
            }

            if(oEmail.val() == ''){
                alert('邮箱不能为空');
                return false;
            }
            
            if(oPwd.val() < 1){
                alert('密码不能为空');
                return false;
            }

            $.ajax({
                url: '/service/adminreg',
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: {
                    uname: oUname.val(),
                    uemail: oEmail.val(),
                    upwd: oPwd.val(),
                    _token: "{{csrf_token()}}"
                },
                success: function(data) {
                    if (data.status != 0){
                        alert(data.message);
                       console.log(data);

                    }else{
                       console.log(data);
                    }
                },
                error: function(data) {
                    alert("系统内部错误");
                }
            });
        };

    </script>
</body>

</html>
