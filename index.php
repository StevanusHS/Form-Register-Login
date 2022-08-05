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
=======
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Home</title>
</head>

<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg atas ">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./img/logowarming.png" alt="logo" width="auto" height="50px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="promo.php">Promo</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="#">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="#">Service</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="#"><i class="bi bi-person-fill"></i></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="#"><i class="bi bi-cart-fill"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end navbar -->
    <main>
        <!-- banner -->
        <section>
            <div class="container-fluid banner">
                <div class="container konten-banner col-lg-6">
                    <div class="text-center">
                        <p class="fs-1">Welcome to WarmingUP</p>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iste quas aut quia? Alias unde, qui suscipit, hic dignissimos labore similique reiciendis laboriosam voluptate debitis voluptates atque, incidunt voluptatem veritatis.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->
        <section>
            <!-- kategori -->
            <div class="container-fluid mt-5">
                <h1 class="fs-1 mb-5 d-flex justify-content-center">Kategori</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="./img/foodContoh.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bento</h5>
                                <p class="card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./img/foodContoh.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Berat</h5>
                                <p class="card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./img/foodContoh.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Ringan</h5>
                                <p class="card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./img/foodContoh.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Minuman</h5>
                                <p class="card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./img/foodContoh.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Warmindo</h5>
                                <p class="card-text">Lorem, ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end kategori -->
        </section>
        <!-- card rekomendasi makanan -->
        <section>
            <div class="container-fluid">
                <h1 class="fs-1 mb-5 mt-5 d-flex justify-content-center">Rekomendasi makanan</h1>
            </div>
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrap d-flex ">
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rekomen 1 -->
                    <div class="carousel-item">
                        <div class="cards-wrap d-flex ">
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rekomen 2 -->
                    <div class="carousel-item">
                        <div class="cards-wrap d-flex ">
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="./img/foodContoh.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">klik disini</a>
                                </div>
                            </div>
                        </div>
                        <!-- rekomen 3 -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- rekomen-end -->
        </section>
    </main>
    <footer>
        <!-- start footer -->
        <div class="container-fuild footer">
            <div class="container konten-footer">
                <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-white">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="#" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"><img src="./img/logowarming.png" alt="logo" width="auto"height="50px"></a>
                        <span class="mb-3 mb-md-0 text-muted text-white">© 2022 WarmingUP.id</span>
                    </div>
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3 text-costum"><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li class="ms-3 text-costum"><a href="#" ><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/popper.min.js"></script>
</body>

</html>
