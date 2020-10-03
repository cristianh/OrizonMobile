<?php
include_once('pool_conexion.php');

// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

return  $conn;


?>