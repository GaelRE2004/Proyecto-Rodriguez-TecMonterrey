<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos Alumno</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_alumno" placeholder="Id Alumno">
                                    <input type="text" class="form-control mb-3" name="curp_alumno" placeholder="Curp Alumno">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre">
                                    <input type="text" class="form-control mb-3" name="id_grupo" placeholder="Id Grupo">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">

                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/proyecto_rodriguez_tecmont/">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Alumno</th>
                                        <th>Curp Alumno</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Semestre</th>
                                        <th>Grupo</th>
                                        <th>direccion</th>



                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_alumno']?></th>
                                                <th><?php  echo $row['curp_alumno']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['semestre']?></th>
                                                <th><?php  echo $row['id_grupo']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                


                                                <th><a href="actualizar.php?id=<?php echo $row['id_alumno'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_alumno'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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