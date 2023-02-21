<?php
$mysqli = include_once "config/conexion.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$sentencia = $mysqli->prepare("INSERT INTO videojuegos
(nombre, descripcion)
VALUES
(?, ?)");
$sentencia->bind_param("ss", $nombre, $descripcion);
$sentencia->execute();
header("Location: index.php");
