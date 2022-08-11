<?php 
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location:../index.php');
}else{
    if($_SESSION['usuario']=="ok"){
        $nombreUsuario=$_SESSION['nombreUsuario'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/frutas&carbon" ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/section/productos.php">Productos</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/section/cerrar.php">Cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
        </div>
    </nav>



    <div class="container">
        <br>
        <div class="row">