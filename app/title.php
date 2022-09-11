<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

if($page == 'login'){
    $title = "Login";
}elseif($page == 'register'){
    $title = "Register";
}


?>