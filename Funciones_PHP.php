<?php
//isset();
//isset: Determina si una variable está declarada y es distinta de null.

$nombre = "Gery";

if (isset($nombre)) {
    echo "Nombre Ingresado\n"; // Esto se imprime
}

//empty();
//Es una funcion que se utilizar para chequear si una variable contiene algun dato.
$apellido = "";

if (empty($apellido)) {
    echo "Apellido Vacio\n"; 
}

//gettype()
//Devuelve el tipo de dato de la variable

echo gettype($nombre) . "\n";

