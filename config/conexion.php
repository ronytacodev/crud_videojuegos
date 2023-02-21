<?php
$host = "localhost:33065";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "crud_videojuegos";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
