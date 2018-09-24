<?php
   $name = $_POST['name']; //esta variable recibe el name que viene del formulario.
   $last_name = $_POST['lastname']; //esta variable recibe el last name que viene del formulario.
   $email = $_POST['email'];  //esta variable recibe el email que viene del formulario.

    /*print "<pre>"; print_r($_REQUEST); print "</pre>\n"; //esta dos lineas es para comprobar si la informacion esta llegando 
    print "<p>Su nombre es $_REQUEST[name]</p>\n";*/
?>


<!--Esta estructura es para mostrar la informacion que viene del formulario.-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: silver;">
    <div class="container" style="padding: 2%; background-color: slategray; color: white; margin: auto; width: 50%; margin-top: 10%;">
        <div style="text-align: center;"><h1 style="font-size: 24px; color: white;">Informacion de Usuario</h1></div>
        <form action="#" style="background-color: lightslategrey; padding: 2%;">
            <!--Este primer div muestra el nombre del usuario digitado en el formulario anterior-->
            <div class="form-group col-md-7" style="margin-bottom: 5px;">
                <label for="nameb">Name</label> <!--de esta manera tuve que imprir el valor del input para que me mostrara la informacion completa que viene del formulario.-->
                <?php echo "<input style='text-align: center;' class='form-control' type='text' maxlength='40' id='name' value= '$name' readonly>"; ?>
            </div>
            <!--Este primer div muestra el segundo nombre del usuario digitado en el formulario anterior-->
            <div  class="form-group col-md-7" style="margin-bottom: 5px;">
                <label for="lastnameb">Last Name </label><!--de esta manera tuve que imprir el valor del input para que me mostrara la informacion completa que viene del formulario.-->
                <?php echo "<input style='text-align: center;' class='form-control' type='text' maxlength='40' id='lastnameb' value= '$last_name' readonly> "; ?>
            </div>
            <!--Este primer div muestra el correo del usuario digitado en el formulario anterior-->
            <div  class="form-group col-md-7" style="margin-bottom: 5px;">
                <label for="emailb">Email  </label><!--de esta manera tuve que imprir el valor del input para que me mostrara la informacion completa que viene del formulario.-->
                <?php echo "<input style='text-align: center;' class='form-control' type='email' maxlength='40' id='email' value= '$email' readonly> "; ?>
            </div>
        </form>
    </div>
</body>
</html>