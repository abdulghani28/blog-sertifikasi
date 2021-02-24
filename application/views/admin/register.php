<?php
if ($this->session->userdata('level') == 'admin') {
    redirect('admin/index');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">

    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables/datatables.min.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Register Admin
                    </div>
                    <div class="card-body">
                        <?= form_open('prosesregister_admin'); ?>
                        <?php if ($this->session->flashdata('pesan') !== null) : ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="<?= set_value('username') ?>" name="username" placeholder="Nama" required>
                            <small class="text-danger">
                                <?= form_error('username'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="<?= set_value('email') ?>" name="email" placeholder="Email" required>
                            <small class="text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="********" required>
                                </div>
                                <small class="text-danger">
                                    <?= form_error('password'); ?>
                                </small>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ketik Ulang Password</label>
                                    <input type="password" class="form-control" name="password1" placeholder="********" required>
                                </div>
                                <small class="text-danger">
                                    <?= form_error('password1'); ?>
                                </small>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">Daftar</button>
                        <?= form_close(); ?>
                        <a href="<?=base_url('login_admin')?>">
                            <small>Sudah punya akun ? <strong>Login</strong></small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/datatables.min.js') ?>"></script>
</body>

</html>