<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM grupo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA GRUPO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos Grupo</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_grupo" placeholder="Grupo">
                                    <input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad">
                                    <input type="text" class="form-control mb-3" name="turno" placeholder="Turno">
                                    <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre">
                                    <input type="text" class="form-control mb-3" name="salon" placeholder="Salón">
                                    <input type="text" class="form-control mb-3" name="cant_alumnos" placeholder="No. Alumnos">
                                    <input type="text" class="form-control mb-3" name="horas_semanales" placeholder="Hrs Semanales">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/proyecto_rodriguez_tecmont/">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Grupo</th>
                                        <th>Especialidad</th>
                                        <th>Turno</th>
                                        <th>Semestre</th>
                                        <th>Salón</th>
                                        <th>No. Alumnos</th>
                                        <th>Hrs Semanales</th>


                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_grupo']?></th>
                                                <th><?php  echo $row['especialidad']?></th>
                                                <th><?php  echo $row['turno']?></th>
                                                <th><?php  echo $row['semestre']?></th> 
                                                <th><?php  echo $row['salon']?></th>
                                                <th><?php  echo $row['cant_alumnos']?></th>
                                                <th><?php  echo $row['horas_semanales']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id_grupo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_grupo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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