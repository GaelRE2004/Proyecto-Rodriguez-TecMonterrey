<?php
include("conexion.php");
$con=conectar();

$id_grupo=$_POST['id_grupo'];
$especialidad=$_POST['especialidad'];
$turno=$_POST['turno'];
$semestre=$_POST['semestre'];
$salon=$_POST['salon'];
$cant_alumnos=$_POST['cant_alumnos'];
$horas_semanales=$_POST['horas_semanales'];


$sql="INSERT INTO grupo VALUES('$id_grupo','$$especialidad','$turno','$semestre', '$salon', '$cant_alumnos', '$horas_semanales')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: grupo.php");
    
}else {
}
?>