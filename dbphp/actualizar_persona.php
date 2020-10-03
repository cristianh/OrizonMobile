<?php

/**
 * Codigo y consulta para actualizar la persona en la pagina de consulta al buscar.
 * por la cedula del usuario.
 */
include_once 'conexion.php';

$id = $_POST['id'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];


// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
}

//Realizamos la consulta.
$consulta = "UPDATE personas SET
 Cedula_persona='" . $cedula . "',
 Nomb_persona='" . $nombre . "',
 Apell_persona='" . $apellido . "',
 Telefono_persona='" . $telefono . "',
 Correo_persona='" . $correo . "',
 Ciudad_persona='" . $ciudad . "'
  where Id_persona=" . $id;
//Obtenemos el resultado.
$resultado = mysqli_query($conn, $consulta) or die("Error al actualizar" . mysqli_error($conn));
if ($resultado == 1) {
    return "Usuario actualizado";
} else {
    return "No se pudo actualizar el usuario";
}
?>