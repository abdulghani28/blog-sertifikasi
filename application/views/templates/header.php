<?php
if ($this->session->userdata('level') == null) :
    redirect(base_url());
endif;
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

    <!-- CKeditor -->
    <script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js') ?>"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MySinopsis</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('admin/index') ?>"> <i class="fa fa-dashboard"></i>
                        Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('admin/kelola_artikel') ?>"> <i class="fa fa-newspaper-o"></i>
                        Kelola Artikel</a>
                </li>
                <?php if ($this->session->userdata('level') === 'admin') : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('admin/kelola_kategori') ?>"><i class="fa fa-th-list"></i>
                            Kelola Kategori</a>
                    </li>
                <?php endif; ?>
            </ul>
            <span class="navbar-text">
                <a href="<?= base_url('logout'); ?>" class="text-danger"> <i class="fa fa-power-off"></i>
                    Logout
                </a>
            </span>
        </div>
    </nav>