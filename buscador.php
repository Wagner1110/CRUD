<?php
function conectar(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "CRUD";

    //CONEXION
    $conn = mysqli_connect($server,$user,$password,$db);
    if(!$conn){
        die ("Error conexion a base de datos: " . mysqli_connect_error());
}else{
    echo "conexion Completa";

} 
return $conn;   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="get">
                
                                    <input type= "text" name="busqueda"> <br>
                                    
                                    <input type="submit" name="enviar" value= "Buscar">
                                   </form>
                                   <br><br><br>
                                   <?php
                                   if(isset($_GET['enviar'])){
                                    $busqueda = $_GET['busqueda'];
                                    $consulta = query("SELECT * FROM Productos WHERE porque LIKE '$busqueda'");
                                    while($row = $consulta->fetch_array()){
                                        echo $row['porque'].'<br>';
                                   }
                                }
                                   ?>
                                  


















</body>
</html>