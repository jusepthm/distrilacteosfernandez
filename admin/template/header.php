<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/frutas&carbon" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="#">Productos</a>
            <a class="nav-item nav-link" href="#">Cerrar</a>
            <a class="nav-item nav-link" href="#">Ver sitio web</a>
        </div>
    </nav>



    <div class="container">
        <br>
        <div class="row">