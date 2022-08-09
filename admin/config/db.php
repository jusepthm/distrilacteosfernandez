<?php
$host="Localhost";
$bd="sitio";
$usuario="root";
$contraseña="";

try {
$conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
/* if($conexion){ echo "Conectando... a sitema"; } */
} catch (Exception $ex) {
echo $ex->getMessage();
}

?>