<?php
//CONEXIÓN A LA BASE DE DATOS.
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "cliniko";

//GUARDAMOS EN ESTA VARIABLE LA PROPIA CONEXIÓN CON LOS DATOS DE ARRIBA.
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

//VERIFICAMOS LA CONEXIÓN Y EN CASO DE QUE HAYA UN ERROR, LO MOSTRAMOS.
if ($conexion->connect_error) {
    die("La conexión no se puede realizar: " . $conexion->connect_error);
}
?>