
<?php

    $cadena = 'hola';
    echo(gettype($cadena) . '<br>'); //indica el tipo de variable

    $numero = 89;
    echo(gettype($numero) . '<br>');

    $estatura = 1.78;
    echo(gettype($estatura)) . '<br>';
    
    $es_dog = true;
    echo(gettype($es_dog) . '<br>');

    $numero = '9';

    // métodos de conversión
    // intval() -> convierte a entero
    // floatval() -> convierte a flotante
    // boolval -> convierte a boolean
    // strval() -> convierte a string

    // conversión de double a int
    $estatura = intval($estatura);
    echo($estatura . '<br>');

    // var_dump -> obtiene el tipo y valor de una variable
    echo(var_dump($estatura) . '<br>');

    // conversión de string a int
    $numero = intval($numero);
    echo(var_dump($numero));
?>