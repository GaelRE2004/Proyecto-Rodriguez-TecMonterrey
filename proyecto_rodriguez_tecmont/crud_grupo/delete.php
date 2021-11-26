<?php

include("conexion.php");
$con=conectar();

$matricula=$_GET['id'];

$sql="DELETE FROM grupo  WHERE id_grupo='$id_grupo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: grupo.php");
    }
?>
