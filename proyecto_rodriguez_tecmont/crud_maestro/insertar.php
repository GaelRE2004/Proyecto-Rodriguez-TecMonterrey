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


$sql="INSERT INTO maestro VALUES('$id_maestro','$curp_maestro','$nombre','$apellido', '$nivel_academico', '$direccion', '$num_tel')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: maestro.php");
    
}else {
}
?>