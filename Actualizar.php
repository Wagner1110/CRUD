<?php 
include("conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$cantidad = $_POST['Cantidad'];
$precio= $_POST['precio'];

$con = conectar();
$sql = "UPDATE Productos SET nombre = '$nombre', descripcion= '$descripcion', fecha_ingreso= '$fecha_ingreso',Cantidad= '$cantidad', precio= '$precio' WHERE id = '$id' ";
if(($result = mysqli_query($con,$sql)) == false){
    die(mysqli_error($con));
}
header("location:index.php");
?>