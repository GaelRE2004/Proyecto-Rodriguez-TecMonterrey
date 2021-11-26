<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM maestro WHERE id_maestro='$id'";
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
                    
                                <input type="hidden" name="id_maestro" value="<?php echo $row['id_maestro']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="curp_maestro" placeholder="Curp Maestrp" value="<?php echo $row['curp_maestro']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">

                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>">



                                <input type="text" class="form-control mb-3" name="nivel_academico" placeholder="Nivel Academico" value="<?php echo $row['nivel_academico']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="num_tel" placeholder="Numero de Telefono" value="<?php echo $row['num_tel']  ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>