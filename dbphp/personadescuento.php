<?php
include_once('conexion.php');

// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$consulta = "SELECT * FROM planes";

$resultado = mysqli_query( $conn, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

return  $resultado;

mysqli_close($conn);
?>