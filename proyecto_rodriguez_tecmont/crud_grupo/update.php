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




$sql="UPDATE grupo SET  especialidad='$especialidad', turno='$turno', semestre='$semestre', salon='$salon', cant_alumnos='$cant_alumnos', horas_semanales='$horas_semanales' WHERE id_grupo='$id_grupo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: grupo.php");
    }
?>