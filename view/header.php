<?php
include("controller/navBarController.php");
$navBar = new NavBarController;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sass/style.css">
    <title>GVA</title>
</head>

<body>

    <nav class="navbar">
        <?php $navBar->navBar(); ?>
    </nav>

    <script src="js/script.js"></script>