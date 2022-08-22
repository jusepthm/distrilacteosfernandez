<?php include("template/header.php"); ?>
<?php include("admin/config/db.php"); 
    $sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
    $sentenciaSQL->execute();
    $listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Productos</h1>
<hr>

<?php foreach($listaProductos as $producto){ ?>
<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="./img/<?php echo $producto['imagen']; ?>" alt="">
        <div class="card-body">
            <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
            <!-- <p class="card-text">Text</p> -->
        </div>
    </div>
</div>
<?php } ?>


<?php include("template/footer.php"); ?>