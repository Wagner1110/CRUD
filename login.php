<?php
include("conexion.php");
$con = conectar();

if(isset($_POST['correo'])&& isset($_POST['pass'])){

    $correo= $_POST['correo'];
    $pass = $_POST['pass'];
   

    $sql = mysqli_query($con,"SELECT * FROM usuarios WHERE correo = '". $correo."'AND pass='".$pass."'");
    $cr = mysqli_num_rows($sql);
    if($cr==1){
        header('location:index.php');
    }else{
        echo"El usuario no existe";
        header('location:login.html');
    }
}









?>