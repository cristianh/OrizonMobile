<?php
/**
 * Codigo que me permite consultar el plan de acuerdo al id que se le pasa por parametro.
 * se busca con la intension de devoler la informacion del plan.
 */
include_once('pool_conexion.php');

$id = $_GET['id'];

// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: ".mysqli_error($conn));
}

$consulta = "SELECT * FROM planes
  where Id_plan=".$id;

$resultado = mysqli_query( $conn, $consulta) or die ( "Error al actualizar".mysqli_error($conn));

$rawdata = array(); //creamos un array

//guardamos en un array multidimensional todos los datos de la consulta
$i=0;

while($row = $resultado->fetch_assoc())
{
$rawdata[$i] = $row;
$i++;
}

mysqli_close($conn);

echo json_encode($rawdata);



?>