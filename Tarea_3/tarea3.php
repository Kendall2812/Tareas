<?php

    if($argc == 7){
        //estos son los argumentos que se le solicitan para 
        $host = $argv[1];
        $user = $argv[2];
        $password = $argv[3];
        $name_database = $argv[4];
        $name_table = $argv[5];
        $file_csv = $argv[6];

        //esta linea es para conectar a la base de datos
        $conx = mysqli_connect($host, $user, $password, $name_database);
        //esta son para realizar la consulta a la tabla
        $result = mysqli_query($conx, "SELECT * FROM $name_table");
        //aqui se combierte la variable $result en un array para que se pueda leer la informacion que contiene
        while($fila = mysqli_fetch_array($result)){
            $id = $fila['cedula'];
            $name = $fila['nombre'];
            $apellido1 = $fila['apellido_1'];
            $puesto = $fila['puesto'];

            //aqui verifica si el archivo exite sino lo crea 
            $myfile = fopen($file_csv, "a");
            //aqui escribe en el archivo
            fwrite($myfile, $id . ", " . $name . ", " . $apellido1 . ", " . $puesto . "," . "\r\n");
        }

        fclose($myfile); //cierra el archivo 
        mysqli_close($conx);//cierra la conexion a la base de datos

    }
    else{
        echo "Solo se aceptan 6 parametros " . "/n";
        echo " Los parametros son User Database, password Database, name Database, and localhost, name of table, name and direction for save file csv";
    }

?>