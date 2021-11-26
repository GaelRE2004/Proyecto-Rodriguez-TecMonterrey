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

$sql="UPDATE alumno SET  curp_alumno='$curp_alumno',nombre='$nombre', apellido='$apellido', semestre='$semestre', id_grupo='$id_grupo', direccion='$direccion' WHERE id_alumno='$id_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>