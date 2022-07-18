<?php
include("conexion.php");
$con = conectar();
$Nombre = $_POST['nombre'];
$Descripcion= $_POST['Descripcion'];
$fecha_ingreso= $_POST['fecha_ingreso'];
$Cantidad = $_POST['Cantidad'];
$Precio = $_POST['Precio'];

$sql ="INSERT INTO Productos(nombre,descripcion,fecha_ingreso,Cantidad,precio) values('$Nombre','$Descripcion','$fecha_ingreso','$Cantidad','$Precio')";

if(($resultado = mysqli_query($con,$sql))==false){
die(mysqli_error($con));


}
header("refresh:2;url=http://localhost/CRUD/index.php");
?>