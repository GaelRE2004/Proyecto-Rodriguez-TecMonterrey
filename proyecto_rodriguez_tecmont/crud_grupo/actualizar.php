<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM grupo WHERE id_grupo='$id'";
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
                    
                                <input type="hidden" name="id_grupo" value="<?php echo $row['id_grupo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad" value="<?php echo $row['especialidad']  ?>">
                                <input type="text" class="form-control mb-3" name="turno" placeholder="Turno" value="<?php echo $row['turno']  ?>">
                                <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre" value="<?php echo $row['semestre']  ?>">
                                <input type="text" class="form-control mb-3" name="salon" placeholder="Salón" value="<?php echo $row['salon']  ?>">
                                <input type="text" class="form-control mb-3" name="cant_alumnos" placeholder="No. Alumnos" value="<?php echo $row['cant_alumnos']  ?>">
                                <input type="text" class="form-control mb-3" name="horas_semanales" placeholder="Hrs Semanales" value="<?php echo $row['horas_semanales']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>