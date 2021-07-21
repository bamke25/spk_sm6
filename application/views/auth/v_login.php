<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a><b>Log</b>in</a>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Form Login</p>

      <form class="user" action="<?= base_url('auth'); ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <small class="text-danger"><?= form_error('email') ?></small>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <small class="text-danger"><?= form_error('password') ?></small>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <a href="#">I forgot my password</a><br>
            <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new membership</a>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->


    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->