<?php
include("conexion.php");
$con=conectar();

$id_materia=$_POST['id_materia'];
$semestre=$_POST['semestre'];
$horas=$_POST['horas'];
$contenido=$_POST['contenido'];
$especialidad=$_POST['especialidad'];
$nombre=$_POST['nombre'];
$creditos=$_POST['creditos'];


$sql="INSERT INTO materia VALUES('$id_materia','$semestre','$horas','$contenido', '$especialidad', '$nombre', '$creditos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: materia.php");
    
}else {
}
?>