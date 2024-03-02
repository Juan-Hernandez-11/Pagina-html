<?php
   $user="root";
   $pass="";
   $server="localhost";
   $db="test";

   $conexion = mysqli_connect($server,$user,$pass);
   
   //DATOS
   if(!$conexion){
    echo "No se ha podido conectar con el servidor". mysqli_connect_error();
    }else{
    echo'<script type="text/javascript">
    alert("Conectado con exito");
    </script>';
    header("location: formularios.html");
    }
    $database = mysqli_select_db($conexion, $db);
?>
<?php

if(isset($_POST['submit'])){

    $firstN = $_POST["firstName"];
    $lastN = $_POST["lastName"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $genero = $_POST["genero"];
    $estado = $_POST["estado"];
    $ciudad = $_POST["ciudad"];
    
    $insertData  = "INSERT INTO resgistration VALUES('','$firstN', '$lastN', '$email', '$genero', '$estado','$number', '$ciudad')";

    $ejecutarInsertar = mysqli_query($conexion, $insertData);
}
?> 





