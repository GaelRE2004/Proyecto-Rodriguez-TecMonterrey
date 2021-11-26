<?php
include("conexion.php");
$con=conectar();

$id_alumno=$_POST['id_alumno'];
$curp_alumno=$_POST['curp_alumno'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$semestre=$_POST['semestre'];
$id_grupo=$_POST['id_grupo'];
$direccion=$_POST['direccion'];



$sql="INSERT INTO alumno VALUES('$id_alumno','$curp_alumno','$nombre','$apellido', '$semestre', '$id_grupo', '$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>