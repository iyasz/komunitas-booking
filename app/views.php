<?php 

$page = isset($_GET['page']) ? $_GET['page'] : '';

if($page == 'login'){
    include "views/auth/login.php";
}elseif($page == 'register'){
    include "views/auth/register.php";
}

$page = isset($_GET['page']) ? $_GET['page'] : '';


?>