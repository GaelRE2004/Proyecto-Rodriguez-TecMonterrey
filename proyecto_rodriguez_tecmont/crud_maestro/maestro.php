<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM maestro";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA MAESTRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos Maestro</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_maestro" placeholder="Id Maestro">
                                    <input type="text" class="form-control mb-3" name="curp_maestro" placeholder="Curp Maestro">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="nivel_academico" placeholder="Nvl Academico">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="num_tel" placeholder="Numero de Telefono">



                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/proyecto_rodriguez_tecmont/">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Maestro</th>
                                        <th>Curp Maestro</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Nivel Academico</th>
                                        <th>Direccion</th>
                                        <th>Numero de Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_maestro']?></th>
                                                <th><?php  echo $row['curp_maestro']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>   
                                                <th><?php  echo $row['nivel_academico']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['num_tel']?></th>                                                


                                                <th><a href="actualizar.php?id=<?php echo $row['id_maestro'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_maestro'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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