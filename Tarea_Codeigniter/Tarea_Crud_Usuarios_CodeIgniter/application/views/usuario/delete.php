<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$row = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Categorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: gray;">
    <div class="container" style=" display: block; margin-top: 5%; background-color: silver; padding: 35px; justify-content: center;">
        <a style="margin-bottom: 25px;" href="<?php echo base_url('usuarios/index')?>" class="btn btn-primary">Registar nuevo Usuarios</a>
        <h3>Lista de Usuarios</h3>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="text-align: center;">Cedula</th>
                    <th style="text-align: center;">Nombre</th>
                    <th style="text-align: center;">Apellido</th>
                    <th style="text-align: center;">Telefono</th>
                    <th style="text-align: center;"></th>
                </tr>
            </thead>
            <!--este ciclo lo que permite es imprimir todas las categorias una por una con sus respectiva informacion ademas en cada linea se imprime dos columnas una para editar y la otra para eliminar-->
            <?php foreach($datos as $rows) { ?>
                <tbody>
                    <tr>
                        <th style='text-align: center;'> <?php echo $rows->cedula ?> </th> 
                        <th style='text-align: center;'> <?php echo $rows->nombre ?> </th>
                        <th style='text-align: center;'> <?php echo $rows->apellido ?> </th>
                        <th style='text-align: center;'> <?php echo $rows->telefono ?> </th>

                        <!--Esto lo que hace es recojer el id del producto que se encuentra en la tabla para que asi puede ir a la base de datos a eliminarlo-->
                        <th style='text-align: center;'> 
                            <a href='#' class='btn btn-danger' data-toggle='modal' data-target='#cedula<?php echo $rows->cedula?>'>Eliminar</a>
                            <div class='modal fade' role='dialog' aria-hidden='true' id='cedula<?php echo $rows->cedula?>'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>Eliminar Usuario</h4>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button>
                                        </div>
                                        <div class='modal-body'>
                                            <p> Realmente desea eliminar el usuario: ( <?php echo $rows->nombre ?>)</p>
                                        </div>
                                        <div class='modal-footer'>                                      
                                            <form action="<?php echo base_url('usuarios/deleteUser'); ?>" method="POST">
                                                <input type='hidden' name='cedula' value="<?php echo $rows->cedula?>">
                                                <button type='submit' class='btn btn-primary'>Eliminar</button>
                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                <tbody> 
            <?php } ?>
            
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>