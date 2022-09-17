<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/img/logo/favicon.png">
    <title>Travelokapala - <?= isset($title) ? $title : 'Pergi Ke Tempat Impian Anda Bersama Kami!' ?></title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
</head>

<body>
    <style>
        .navbar {
            z-index: 3;
        }
    </style>
    <div class=" position-fixed top-0 start-0 end-0 navbar navbar-expand-lg text-bg-light shadow-sm">
        <div class="container ">
            <a class="navbar-brand" href="<?= base_url()  ?>"><img class="img-fluid" src="<?= base_url() ?>/assets/img/logo/traveloka.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php?page=login">Login</a>
                    <a class="nav-link" href="index.php?page=register">Register</a>
                </div>
            </div>
        </div>
    </div>