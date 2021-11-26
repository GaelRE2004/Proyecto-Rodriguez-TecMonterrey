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



$sql="UPDATE materia SET  semestre='$semestre', horas='$horas',contenido='$contenido', especialidad='$especialidad', nombre='$nombre', creditos='$creditos' WHERE id_materia='$id_materia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: materia.php");
    }
?>