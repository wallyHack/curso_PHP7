
<?php
    // funciones útiles en cadenas

    // función para extraer parte de una cadena
    echo(substr("Mi nombre es Manuel Herrera", 13) . '<br>'); // muestra Manuel Herrera
    echo(substr("Lara Lara mimo mumu", 10, 4) . '<br>'); //muestra mimo

    // función para buscar contenido en una cadena
    $cadena = "El gato es grande y de color gris";
    $palabra_a_buscar = "grande";
    $letra_a_buscar = 'g';
    echo(strpos($cadena, $palabra_a_buscar) . '<br>'); // muestra un 11
    echo(strpos($cadena, $letra_a_buscar) . '<br>'); // muestra el indice de la primer incidencia
    echo(strpos($cadena, $letra_a_buscar, 4) . '<br>'); // muestra el indice de la segunda incidencia

    // función para reemplazar una palabra o carácter
    $buscar = '9';
    $reemplazar = ':';
    $cadena = '91 75 1A EC 9A C7';
    echo(str_replace($buscar, $reemplazar, $cadena, $count) . '<br>');
    echo($count . '<br>'); // $count -> indica el numero de incidencias

    // función para dar formato a una cadena
    $numero = 9;
    $ubicacion = 'árbol';
    $formato  = "Hay %d manzanas en el %s de mi casa";
    echo(sprintf($formato, $numero, $ubicacion) . '<br>');

    $lenguaje = 'PHP';
    $year = 1994;
    $formato = "El lenguaje %s fue creado en %d";
    echo(sprintf($formato, $lenguaje, $year));
?>