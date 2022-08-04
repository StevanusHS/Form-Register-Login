<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Van</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>DAFTAR</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 px-5">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" name="nomor_hp">
                    </div>
                    <label for="basic-url" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" data-toggle="password" name="password">
                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </div>
                    <label for="basic-url" class="form-label">Konfirmasi Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" data-toggle="password" name="konfirmasi_password">
                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" name="persetujuan">
                        <label class="form-check-label" style="font-size: 14px;">
                            <b>Saya setuju</b> dengan ketentuan penggunaan dan kebijakan privasi
                        </label>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-warning fw-bold" style="padding-left: 50px;padding-right: 50px;" name="daftar" value="daftar">DAFTAR</button>
                    </div>
                    <div class="mb-3 mt-3 text-center">
                        <label class="form-label">Atau daftar dengan : </label>
                    </div>
                    <div class="mb-3 text-center">
                        <label class="form-label">
                            <img src="./assets/email.png" alt="Email" width="32" height="32">
                            <img src="./assets/facebook.png" alt="Email" width="32" height="32">
                            <img src="./assets/google.png" alt="Email" width="32" height="32">
                        </label>
                    </div>
                    <div class="mb-3 text-center">
                        <label class="form-label">Sudah punya akun? <a class="fw-bold text-black" style="text-decoration: none;" href="./login.php">Masuk</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        ! function($) {
            'use strict';

            $(function() {
                $('[data-toggle="password"]').each(function() {
                    var input = $(this);
                    var eye_btn = $(this).parent().find('.input-group-text');
                    eye_btn.css('cursor', 'pointer').addClass('input-password-hide');
                    eye_btn.on('click', function() {
                        if (eye_btn.hasClass('input-password-hide')) {
                            eye_btn.removeClass('input-password-hide').addClass('input-password-show');
                            eye_btn.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash')
                            input.attr('type', 'text');
                        } else {
                            eye_btn.removeClass('input-password-show').addClass('input-password-hide');
                            eye_btn.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye')
                            input.attr('type', 'password');
                        }
                    });
                });
            });

        }(window.jQuery);
    </script>
</body>

</html>

<?php

if (isset($_POST['daftar'])) {
    if ($_POST['password'] == $_POST['konfirmasi_password']) {
        if (empty($_SESSION['data'])) {
            $_SESSION['data'] = array();
        }

        $data = array(
            "nama_lengkap" => $_POST['nama_lengkap'],
            "nomor_hp" => $_POST['nomor_hp'],
            "password" => $_POST['password']
        );

        array_push($_SESSION['data'], $data);
        echo "Berhasil daftar";
    } else {
        echo "Password dan Konfirmasi Password tidak sama.";
    }
}

?>