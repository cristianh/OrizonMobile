<?php
/**
 * Codigo y consulta para actualizar la venta de celular en la pagina de consulta al buscar
 * por la cedula del usuario.
 */
include_once('pool_conexion.php');


$id_celular = $_POST['Id_celular'];
$nom_celular = $_POST['nom_celular'];
$datos_celular = $_POST['datos_celular'];
$memoria_celular = $_POST['memoria_celular'];
$sistemaop_celular = $_POST['Sistemaop_celular'];
$procesador_celular = $_POST['Procesador_celular'];
$precio_celular = $_POST['Precio_celular'];
$descuento_celular = $_POST['Descuento_celular'];

// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// Detectamos la conexión
if (!$conn) {
    die("Connection failed: ".mysqli_error($conn));
}

//Realizamos la actualizacion.
$consulta = "UPDATE ventas_celular SET
Nom_celular='".$nom_celular."',
datos_celular='".$datos_celular."',
Memoria_celular='".$memoria_celular."',
Sistemaop_celular='".$sistemaop_celular."',
Procesador_celular='".$procesador_celular."',
Precio_celular='".$precio_celular."',
Descuento_celular='".$descuento_celular."'
where Id_Celular=".$id_celular.";";

$resultado = mysqli_query( $conn, $consulta) or die ( "Error al actualizar".mysqli_error($conn));



?>