<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Blog | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/skins/_all-skins.min.css') }}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}"><b>My</b> Blog</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form role="form" method="post" enctype="multipart/form-data" action="{{ url('backend/user') }}" id="user-form" >
            <div class="box-body">
                <div class="form-group">
                    <label for="user_pic">头像</label>
                    <div class="row">
                        <div class='col-md-6'>
                            <input type="file" name="user_pic" id="user_pic" accept="image/png,image/gif,image/jpeg">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">名字</label>
                    <div class="row">
                        <div class='col-md-6'>
                            <input type='text' class='form-control' name="name" id='name' placeholder='请输入名字'>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">登录邮箱</label>
                    <div class="row">
                        <div class='col-md-6'>
                            <input type="text" class='form-control' name="email" id="email" placeholder="请输入唯一的邮箱">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">登录密码</label>
                    <div class="row">
                        <div class='col-md-6'>
                            <input type="password" class='form-control' name="password" id="password" placeholder="请输入大于等于8位的密码">
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign up</button>
                </div>

            </div>

        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="{{ asset('AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('AdminLTE/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>