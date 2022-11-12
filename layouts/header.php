<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/img/logo/favicon.png">
    <title>Travelokapala - <?= isset($title) ? $title : 'Pergi Ke Tempat Impian Anda Bersama Kami!' ?></title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <style>
        .navbar {
            z-index: 3;
        }
    </style>
    <div class="fixed-top navbar navbar-expand-lg navbar-dark  ">
        <div class="container ">
            <a class="navbar-brand" href="<?= base_url()  ?>"><img class="img-fluid" src="<?= base_url() ?>/assets/img/logo/traveloka-white.svg" width="140px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-3" href="">Home</a>
                    <a class="nav-link mx-3" href="">Explore</a>
                    <a class="nav-link mx-3" href="">Travel</a>
                    <a class="nav-link mx-3" href="">Blog</a>
                    <!-- <a class="nav-link me-2" href="index.php?page=login">Login</a>
                    <a class="nav-link ms-2" href="index.php?page=register">Register</a> -->
                </div>
            </div>
        </div>
    </div>