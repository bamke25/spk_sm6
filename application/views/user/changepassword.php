<br>
<br>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('User/profile'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content-wrapper">

        <br><br>
        <!-- Main content -->
        <section class="content">
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <form action="<?= base_url('User/changepassword'); ?>" method="POST">
                        <div class="form-group">
                            <label for="currentpassword">Current Password</label>
                            <input type="password" class="form-control" id="currentpassword" name="currentpassword">
                            <small class="text-danger"><?= form_error('currentpassword') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="newpassword1">New Password</label>
                            <input type="password" class="form-control" id="newpassword1" name="newpassword1" >
                            <small class="text-danger"><?= form_error('newpassword1') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="newpassword2">Repeat New Password</label>
                            <input type="password" class="form-control" id="newpassword2" name="newpassword2" >
                            <small class="text-danger"><?= form_error('newpassword2') ?></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->






</section>
<!-- /.content -->
</div>