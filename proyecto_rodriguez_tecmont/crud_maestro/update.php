<?php

include("conexion.php");
$con=conectar();


$id_maestro=$_POST['id_maestro'];
$curp_maestro=$_POST['curp_maestro'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$nivel_academico=$_POST['nivel_academico'];
$direccion=$_POST['direccion'];
$num_tel=$_POST['num_tel'];


$sql="UPDATE maestro SET  curp_maestro='$curp_maestro', nombre='$nombre',apellido='$apellido', nivel_academico='$nivel_academico', direccion='$direccion', num_tel='$num_tel' WHERE id_maestro='$id_maestro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: maestro.php");
    }
?>