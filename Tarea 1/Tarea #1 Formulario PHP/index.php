<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: silver;">
    <!--Este div contiene el formulario-->
    <div class="Register" style="margin: auto; margin-top: 10%; background-color: slategray; padding: 2%; width: 50%;">
        <div style="text-align: center;"><h1 style="font-size: 24px; color: white;">Registro de Usuarios</h1></div>    
        <form style="margin: auto; background-color: lightslategrey; color: white; padding: 2%;" name="Form_Register" method="POST" action="Save.php">
            <!--Este campo es para digitar el nombre del usuario-->
            <div class="form-group col-md-7"> 
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" value="" id="name" maxlength="40">
            </div>
            <!--Este campo es para digitar el segundo nombre del usuario-->
            <div class="form-group col-md-7">
                <label for="lastname">Last Name</label>
                <input class="form-control" type="text" name="lastname" value="" id="lastname" maxlength="40">
            </div>
            <!--Este campo es para digitar el email de el usuario-->
            <div class="form-group col-md-7">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="" id="email" aria-describedby="emailHelp" maxlength="100">
            </div>
            <button style="width: 20%; margin-left: 2%;" type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>