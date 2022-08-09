<?php include("../template/header.php"); ?>
<?php 

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $txtID."<br>";
echo $txtNombre."<br>";
echo $txtImagen."<br>";
echo $accion."<br>";

$host="Localhost";
$bd="sitio";
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
    if($conexion){ echo "Conectando... a sitema"; }
} catch (Exception $ex) {
    echo $ex->getMessage();
}



switch($accion){

    case "Agregar":
       // INSERT INTO `productos` (`id`, `nombre`, `imagen`) VALUES (NULL, 'limon', 'imagen.jpg');
        echo "Presionando el boton Agregar";
        break;
    case "Modificar":
        echo "Presionando el boton Modificar";
        break;
    case "Cancelar":
        echo "Presionando el boton Cancelar";
        break;
    





}

?>
<div class="col-md-5">

    <div class="card">

        <div class="card-header">
            Datos de Productos
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label for="txtImagen">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>
            </form>
        </div>

    </div>
</div>


<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>


</div>

<?php include("../template/footer.php"); ?>