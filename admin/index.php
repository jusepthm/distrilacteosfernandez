<?php 
if($_POST){
    header('Location:inicio.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-md-4"></div>
            <div class="col-md-4"><br><br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>

                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">

                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="contraseña"
                                    placeholder="Escribe tu contraseña">
                            </div>

                            <button type="submit" class="btn btn-primary">Entrar al administrador</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>