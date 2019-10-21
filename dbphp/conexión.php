<?php
//Establecemos la variables de entorno para la conexión.
$servername = "127.0.0.1";
$database = "dbrealitymobille";
$username = "adminwebsite";
$password = "webmaster";
// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM alumnos";

echo "Connected successfully";
mysqli_close($conn);
?>