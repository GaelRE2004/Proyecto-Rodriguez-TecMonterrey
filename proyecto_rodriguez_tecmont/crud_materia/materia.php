<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM materia";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA MATERIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos Materia</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_materia" placeholder="Id Materia">
                                    <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre">
                                    <input type="text" class="form-control mb-3" name="horas" placeholder="horas">
                                    <input type="text" class="form-control mb-3" name="contenido" placeholder="contenido">
                                    <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="creditos" placeholder="creditos">

                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/proyecto_rodriguez_tecmont/">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Materia</th>
                                        <th>Semestre</th>
                                        <th>Horas</th>
                                        <th>Contenido</th>
                                        <th>Especialidad</th>
                                        <th>Nombre</th>
                                        <th>Creditos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_materia']?></th>
                                                <th><?php  echo $row['semestre']?></th>
                                                <th><?php  echo $row['horas']?></th>
                                                <th><?php  echo $row['contenido']?></th>
                                                <th><?php  echo $row['especialidad']?></th>                                           
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['creditos']?></th>



                                                <th><a href="actualizar.php?id=<?php echo $row['id_materia'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_materia'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>