<?php

use static\hola;

require_once 'config.php';

//hola::saludar();

//Otro manera de llamar una funcion a travez de variable
function foo(){
    return "Hola Mundo";
}

$foo = "foo";

echo $foo();