<?php
/**
 * Codigo y consulta para eliminar la venta de celular en la pagina de consulta al buscar
 * por la cedula del usuario.
 */
include_once('pool_conexion.php');

$id_ventas = $_POST['id_ventas'];




// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: ".mysqli_error($conn));
}



$consulta = "DELETE FROM ventas_celular WHERE Id_Celular=".$id_ventas;

$resultado = mysqli_query( $conn, $consulta) or die ( "Error al actualizar".mysqli_error($conn));
if($resultado==1){
    return "Usuario eliminado";
}
else{
    return "No se pudo elimar  el usuario";
}



?>