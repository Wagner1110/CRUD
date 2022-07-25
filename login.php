<?php
session_start();
if(isset($_SESSION['datos'])){
 header('location:index.html');   
}else{
    $dbhost="localhost";
    $dbuser="CRUD";
    $dbpass="";
    $dbname="";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die("Error en la conexion a base de datos: " .mysqli_connect_error());
    }
    if(isset($_POST['correo'])&& isset($_POST['pass'])){
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($conn,"SELECT * FROM crud WHERE correo ='".$correo . "' AND pass='". $pass ."'");
$cr = mysqli_num_rows($sql);
if(!isset($_SESSION['datos'])){
    $_SESSION['datos'] = $correo;
    header('location:index.php');
}else{
    header('location:login.html');
} 

    }

} 