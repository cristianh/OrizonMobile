<?php
/**
 * Codigo y consulta para eliminar el descuento en la pagina de consulta al buscar
 * por la cedula del usuario.
 */
include_once('pool_conexion.php');

$id_persona = $_POST['id_persona'];


// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: ".mysqli_error($conn));
}


//Realizamos la consulta.
$consulta = "DELETE FROM descuentos WHERE Id_persona=".$id_persona;

$resultado = mysqli_query( $conn, $consulta) or die ( "Error al actualizar".mysqli_error($conn));
if($resultado==1){
    return "Usuario eliminado";
}
else{
    return "No se pudo elimar  el usuario";
}



?>