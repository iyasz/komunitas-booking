<?php

$page = $_GET['page'] ?? '';

if ($page == 'login') {
    include "views/auth/login.php";
} elseif ($page == 'register') {
    include "views/auth/register.php";
} else {
    include "views/home/index.php";
}
