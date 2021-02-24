<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JQuery -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables/datatables.min.css') ?>">


</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light navbar-expand-sm">
        <a class="navbar-brand" href="<?=base_url()?>">
            MySinopsis
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-8" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbar-list-8">
            <ul class="navbar-nav">
            </ul>
            <div class="right-side d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown dropleft">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users"> Users</i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('register_admin') ?>">Register</a>
                            <a class="dropdown-item" href="<?= base_url('login_admin') ?>">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>