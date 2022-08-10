<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frutas&carbon</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/frutas&carbon" ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Logo </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>/admin/index.php">Login</a>
            </li>
        </ul>
    </nav>


    <did class="container">
        <div class="row">