
<?php
    # Tipos de datos
    #String
    $nombre = "Manuel Herrera";

    #Integer
    $numero = 99;
    
    #Double
    $num_decimal = 676.289;

    #boolean
    $encendido = TRUE;

    #Array
    #Object
    #Class
    #Null ->Es cuando a una variable aun no se le ha asignado un valor
    
    echo('hola, ' . $nombre . '<br />');  
    //echo("hola, $nombre");
    echo('tipo de dato: ' . gettype($nombre) . '<br>');

    // constantes con const y define
    //const -> define constantes en tiempo de compilación
    const PATH = '1_curso_PHP7/variables.php';
    echo(PATH . '<br>');

    //define -> define constantes en tiempo de ejecución
    define('PATH2', mt_rand()) ;
    echo(PATH2);

    //arreglo de constantes definidas
    // print_r(get_defined_constants(true));
?>