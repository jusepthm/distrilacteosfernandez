<?php include("template/header.php"); ?>
<?php include("admin/config/db.php"); 
    $sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
    $sentenciaSQL->execute();
    $listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Productos</h1>
<hr>
<div class="container-card">

    <?php foreach($listaProductos as $producto){ ?>
    <div class="card">

        <figure>
            <img src="./img/<?php echo $producto['imagen']; ?>" alt="">
        </figure>
        <div class="contenido">
            <h3><?php echo $producto['nombre']; ?></h3>
            <!-- <p class="card-text">Text</p> -->
        </div>

    </div>
    <?php } ?>

</div>
<hr>


<?php include("template/footer.php"); ?>