<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('assets/') ?>img/foto1.jpg" rel="icon">
    <title>Register</title>
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg -gradient-login">
    <style>
        body {
            background-color: #DECBA4;
        }
    </style>

    <body class="bg-gradient-login">
        <!-- Register Content -->
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card shadow-sm my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-form">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Admin Registrasi</h1>
                                        </div>
                                        </head>
                                        <form class="user" method="POST" action="<?= base_url('Auth/admin_registration'); ?>">
                                            <div class="form-group">
                                               
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" name="nama_petugas" id="nama" placeholder="nama" value="<?= set_value('nama'); ?>"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="username" value="<?= set_value('username'); ?>"><?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="password" value="<?= set_value('password'); ?>"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" id="telepon" name="telp" placeholder="telp" value="<?= set_value('telepon'); ?>"><?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <br>

                                            <button type="submit" class="btn btn-primary btn-user btn-block text-warning" style="background: black;">
                                                Akun Baru
                                            </button>
                                            <div class="text-center">
                                                <a class="font-weight-bold small" href="<?= base_url('auth/admin_login') ?>">Tekan
                                                    Jika Mempunyai Akun!</a>
                                            </div>
                                            <div class="text-center">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Content -->
        <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/ruang-admin.min.js"></script>
    </body>

</html>