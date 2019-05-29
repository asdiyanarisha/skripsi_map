<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url("themeadmin/bootstrap/css/bootstrap.min.css") ?>">
    <!-- Font Awesome -->
    
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url("themeadmin/dist/css/AdminLTE.min.css") ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url("themeadmin/plugins/iCheck/square/blue.css") ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page" style="margin-top: 100px; padding-top: 110px;">
    <div class="login-box" style="opacity: 0.8;">
      <div class="login-logo">
        
        <br>
        <img src="">
      </div><!-- /.login-logo -->
      
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <?php if($this->session->userdata('pesan')): ?>
          <br>
          <div class="alert alert-danger"> Login Gagal</div>
        <?php endif ?>

       

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url("themeadmin/plugins/jQuery/jQuery-2.1.4.min.js") ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url("themeadmin/bootstrap/js/bootstrap.min.js") ?>"></script>
    <!-- iCheck -->
    
    </body>
</html>
