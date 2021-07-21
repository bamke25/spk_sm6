<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register User</p>

      <form class="user" action="<?= base_url('auth/registration'); ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Full name">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <small class="text-danger"><?= form_error('name') ?></small>
        </div>
        <div class="form-group has-feedback">
          <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <small class="text-danger"><?= form_error('email') ?></small>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <small class="text-danger"><?= form_error('password1') ?></small>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="password2" name="password2" class="form-control" placeholder="Retype password">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->