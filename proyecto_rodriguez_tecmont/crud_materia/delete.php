<?php

include("conexion.php");
$con=conectar();

$id_materia=$_GET['id'];

$sql="DELETE FROM materia  WHERE id_materia='$id_materia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
