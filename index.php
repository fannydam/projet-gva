<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include('./view/header.php');

include('./controller/router.php');

include('./view/footer.php');