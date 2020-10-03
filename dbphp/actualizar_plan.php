<?php
/**
 * Codigo y consulta para actualizar el plan de la persona en la pagina de consulta al buscar
 * por la cedula del usuario.
 */
include_once('pool_conexion.php');


$id_plan = $_POST['idplan'];
$planseleccionado = $_POST['planseleccionado'];

echo $id_plan;


// Creamos la conexión.
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión.
if (!$conn) {
    die("Connection failed: ".mysqli_error($conn));
}

//Realizamos la actualizacion.
$consulta = "UPDATE descuentos SET Id_Plan=".$planseleccionado." where Id_Persona=".$id_plan.";";

$resultado = mysqli_query( $conn, $consulta) or die ( "Error al actualizar".mysqli_error($conn));



?>