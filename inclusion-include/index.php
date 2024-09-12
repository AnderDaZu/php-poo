<?php

// require 'greets.php'; // si no encuentra el archivo detiene el programa y muestra el error
// require_once 'greet.php'; // lo mismo de require, pero en este caso evita el error por llamar +1 vez algún archivo 
include 'greet.php'; // si no encuentra el archivo no detiene el programa pero muestra una advertencia

echo "Inicio el programa...\n";

greet('Ander', 'Como andas...');