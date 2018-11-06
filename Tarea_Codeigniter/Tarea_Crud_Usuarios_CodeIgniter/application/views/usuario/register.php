<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$msj ="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: gray;">
    <div class="container" style="background-color: silver; margin-top: 10%; padding: 7px;">
        <a href="<?php echo base_url('usuarios/view_user')?>" class="btn btn-primary">Ver Usuarios</a>
        <br><br>
        <h2 style="margin-bottom: 20px;">Registro Usuarios</h2>
        <p style="font-size: 20px;"><?php echo $msj; ?></p>
        <form class="needs-validation" method="POST" action="<?php echo base_url('usuarios/insertUser') ?>" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Cedula</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Cedula" name="cedula" required>
                    <div class="invalid-feedback">
                        Se require el cedula.
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Nombre" name="nombre" required>
                    <div class="invalid-feedback">
                        Se require el nombre.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Apellido</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Apellido" name="apellido" required>
                    <div class="invalid-feedback">
                        Se require el apellido.
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Telefono</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Telefono" name="telefono" required>
                    <div class="invalid-feedback">
                        Se require telefono.
                    </div>
                </div>
            </div>
            
            <button class="btn btn-success" type="submit">Registrar</button>
        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                    });
                }, false);
            })();
        </script>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>