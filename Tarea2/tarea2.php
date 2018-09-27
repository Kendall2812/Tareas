<?php
$fila = 0;
if (($gestor = fopen("products.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $numero = count($datos);
        $fila++;
        for ($c=0; $c < $numero; $c++) {
            echo $datos[$c] . "\n";
        }
    }
    fclose($gestor);
}
?>,



