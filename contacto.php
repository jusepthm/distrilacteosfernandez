<?php include("template/header.php"); ?>
<h1 class="contactame">Contactame</h1>
<hr>
<div class="col-md-3"></div>
<div class="col-md-6">
    <form>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="nombre" class="form-control" id="nombre" a placeholder="Escriba su nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Email:</label>
            <input type="email" class="form-control" id="email" a placeholder="Escriba su correo">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="number" class="form-control" id="telefono" a placeholder="Digite su numero telefonico">
        </div>
        <div class="form-group">
            <label for="comentario">Comentario:</label>
            <input type="texarea" class="form-control" id="comentario" a placeholder="Escriba su comentario">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>


</div>
<div class="col-md-3"></div>


<?php include("template/footer.php"); ?>