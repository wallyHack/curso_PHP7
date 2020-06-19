
<?php

    // concatenación -> va uniendo elementos para formar una cadena
    // se realiza con un .
    // en comillas simples no se pueden incluir variables
    $nombre = "Manuel Herrera";
    $sueldo = 8900.79;    
    echo("El sueldo de: $nombre es de $sueldo" . " y trabaja como developer en google." . '<br>'); 

    // usando {} para agregar texto extra sin afectar el nombre de la varible
    $nombre = 'luis';
    echo("Hola {$nombre}sss");
?>