<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE id_alumno='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_alumno" value="<?php echo $row['id_alumno']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="curp_alumno" placeholder="Curp" value="<?php echo $row['curp_alumno']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre" value="<?php echo $row['semestre']  ?>">
                                <input type="text" class="form-control mb-3" name="id_grupo" placeholder="Grupo" value="<?php echo $row['id_grupo']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">



                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>