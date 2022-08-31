<?php include("template/header.php"); ?>
<h1 class="contactame">Contactanos</h1>
<hr>
<div class="col-md-3"></div>
<div class="col-md-6">
    <form class="form text-center" action="enviar.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="nombre" class="form-control text-center" name="nombre" id="nombre" a
                placeholder="Escriba su nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Email:</label>
            <input type="email" class="form-control text-center" name="email" id="email" a
                placeholder="Escriba su correo">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="number" class="form-control text-center" name="telefono" id="telefono" a
                placeholder="Digite su numero telefonico">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <input type="texarea" class="form-control text-center" name="mensaje" id="mensaje" a
                placeholder="Escriba su mensaje ¡aqui!">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>


</div>
<div class="col-md-3"></div>
<hr>


<?php include("template/footer.php"); ?>