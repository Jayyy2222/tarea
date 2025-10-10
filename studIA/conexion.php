<?php
$host = "localhost";
$usuario = "root";
$password = "70307793";
$bd = "studia";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
