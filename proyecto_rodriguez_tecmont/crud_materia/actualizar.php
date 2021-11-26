<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM materia WHERE id_materia='$id'";
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
                    
                                <input type="hidden" name="id_materia" value="<?php echo $row['id_materia']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre" value="<?php echo $row['semestre']  ?>">
                                <input type="text" class="form-control mb-3" name="horas" placeholder="Horas" value="<?php echo $row['horas']  ?>">
                                <input type="text" class="form-control mb-3" name="contenido" placeholder="Contenido" value="<?php echo $row['contenido']  ?>">
                                <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad" value="<?php echo $row['especialidad']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="creditos" placeholder="creditos" value="<?php echo $row['creditos']  ?>">


                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>