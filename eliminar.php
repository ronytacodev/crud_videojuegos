<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
$mysqli = include_once "config/conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM videojuegos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: index.php");
