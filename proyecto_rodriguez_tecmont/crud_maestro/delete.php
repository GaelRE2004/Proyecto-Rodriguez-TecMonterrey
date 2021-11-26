<?php

include("conexion.php");
$con=conectar();

$id_maestro=$_GET['id'];

$sql="DELETE FROM maestro  WHERE id_maestro='$id_maestro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: maestro.php");
    }
?>
